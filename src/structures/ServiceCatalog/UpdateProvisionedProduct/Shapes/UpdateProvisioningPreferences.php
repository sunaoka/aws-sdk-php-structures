<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateProvisionedProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $StackSetAccounts
 * @property list<string> $StackSetRegions
 * @property int<0, max> $StackSetFailureToleranceCount
 * @property int<0, 100> $StackSetFailureTolerancePercentage
 * @property int<1, max> $StackSetMaxConcurrencyCount
 * @property int<1, 100> $StackSetMaxConcurrencyPercentage
 * @property 'CREATE'|'UPDATE'|'DELETE' $StackSetOperationType
 */
class UpdateProvisioningPreferences extends Shape
{
    /**
     * @param array{
     *     StackSetAccounts?: list<string>,
     *     StackSetRegions?: list<string>,
     *     StackSetFailureToleranceCount?: int<0, max>,
     *     StackSetFailureTolerancePercentage?: int<0, 100>,
     *     StackSetMaxConcurrencyCount?: int<1, max>,
     *     StackSetMaxConcurrencyPercentage?: int<1, 100>,
     *     StackSetOperationType?: 'CREATE'|'UPDATE'|'DELETE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
