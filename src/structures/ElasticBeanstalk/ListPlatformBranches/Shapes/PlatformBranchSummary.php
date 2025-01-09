<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ListPlatformBranches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PlatformName
 * @property string $BranchName
 * @property string $LifecycleState
 * @property int $BranchOrder
 * @property list<string> $SupportedTierList
 */
class PlatformBranchSummary extends Shape
{
    /**
     * @param array{
     *     PlatformName?: string,
     *     BranchName?: string,
     *     LifecycleState?: string,
     *     BranchOrder?: int,
     *     SupportedTierList?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
