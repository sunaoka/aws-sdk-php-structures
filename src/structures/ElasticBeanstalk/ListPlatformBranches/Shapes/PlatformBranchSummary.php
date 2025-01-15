<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ListPlatformBranches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PlatformName
 * @property string|null $BranchName
 * @property string|null $LifecycleState
 * @property int|null $BranchOrder
 * @property list<string>|null $SupportedTierList
 */
class PlatformBranchSummary extends Shape
{
    /**
     * @param array{
     *     PlatformName?: string|null,
     *     BranchName?: string|null,
     *     LifecycleState?: string|null,
     *     BranchOrder?: int|null,
     *     SupportedTierList?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
