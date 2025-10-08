<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeHybridADUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<HybridUpdateInfoEntry>|null $SelfManagedInstances
 * @property list<HybridUpdateInfoEntry>|null $HybridAdministratorAccount
 */
class HybridUpdateActivities extends Shape
{
    /**
     * @param array{
     *     SelfManagedInstances?: list<HybridUpdateInfoEntry>|null,
     *     HybridAdministratorAccount?: list<HybridUpdateInfoEntry>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
