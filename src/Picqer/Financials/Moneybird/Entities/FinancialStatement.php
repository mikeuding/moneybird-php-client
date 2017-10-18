<?php namespace Picqer\Financials\Moneybird\Entities;

use Picqer\Financials\Moneybird\Actions\Removable;
use Picqer\Financials\Moneybird\Actions\Storable;
use Picqer\Financials\Moneybird\Model;

/**
 * Class FinancialStatement
 * @package Picqer\Financials\Moneybird\Entities
 */
class FinancialStatement extends Model {

    use Storable, Removable;

    /**
     * @var array
     */
    protected $fillable = [
        'financial_account_id',
        'reference',
        'official_date',
        'official_balance',
        'importer_service',
        'financial_mutations',
        'update_journal_entries',
    ];

    /**
     * @var string
     */
    protected $endpoint = 'financial_statements';

    /**
     * @var string
     */
    protected $namespace = 'financial_statement';

    /**
     * @var array
     */
    protected $multipleNestedEntities = [
        'financial_mutations' => [
            'entity' => 'FinancialMutation',
            'type' => self::NESTING_TYPE_ARRAY_OF_OBJECTS,
        ],
    ];
}
