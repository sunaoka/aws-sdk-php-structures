<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ProvisionProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $StackSetAccounts
 * @property list<string> $StackSetRegions
 * @property int $StackSetFailureToleranceCount
 * @property int $StackSetFailureTolerancePercentage
 * @property int $StackSetMaxConcurrencyCount
 * @property int $StackSetMaxConcurrencyPercentage
 */
class ProvisioningPreferences extends Shape
{
    /**
     * @param array{
     *     StackSetAccounts?: list<string>,
     *     StackSetRegions?: list<string>,
     *     StackSetFailureToleranceCount?: int,
     *     StackSetFailureTolerancePercentage?: int,
     *     StackSetMaxConcurrencyCount?: int,
     *     StackSetMaxConcurrencyPercentage?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
