<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateProvisionedProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $StackSetAccounts
 * @property list<string>|null $StackSetRegions
 * @property int<0, max>|null $StackSetFailureToleranceCount
 * @property int<0, 100>|null $StackSetFailureTolerancePercentage
 * @property int<1, max>|null $StackSetMaxConcurrencyCount
 * @property int<1, 100>|null $StackSetMaxConcurrencyPercentage
 * @property 'CREATE'|'UPDATE'|'DELETE'|null $StackSetOperationType
 */
class UpdateProvisioningPreferences extends Shape
{
    /**
     * @param array{
     *     StackSetAccounts?: list<string>|null,
     *     StackSetRegions?: list<string>|null,
     *     StackSetFailureToleranceCount?: int<0, max>|null,
     *     StackSetFailureTolerancePercentage?: int<0, 100>|null,
     *     StackSetMaxConcurrencyCount?: int<1, max>|null,
     *     StackSetMaxConcurrencyPercentage?: int<1, 100>|null,
     *     StackSetOperationType?: 'CREATE'|'UPDATE'|'DELETE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
