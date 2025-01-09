<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ListPlatformVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PlatformArn
 * @property string $PlatformOwner
 * @property 'Creating'|'Failed'|'Ready'|'Deleting'|'Deleted' $PlatformStatus
 * @property string $PlatformCategory
 * @property string $OperatingSystemName
 * @property string $OperatingSystemVersion
 * @property list<string> $SupportedTierList
 * @property list<string> $SupportedAddonList
 * @property string $PlatformLifecycleState
 * @property string $PlatformVersion
 * @property string $PlatformBranchName
 * @property string $PlatformBranchLifecycleState
 */
class PlatformSummary extends Shape
{
    /**
     * @param array{
     *     PlatformArn?: string,
     *     PlatformOwner?: string,
     *     PlatformStatus?: 'Creating'|'Failed'|'Ready'|'Deleting'|'Deleted',
     *     PlatformCategory?: string,
     *     OperatingSystemName?: string,
     *     OperatingSystemVersion?: string,
     *     SupportedTierList?: list<string>,
     *     SupportedAddonList?: list<string>,
     *     PlatformLifecycleState?: string,
     *     PlatformVersion?: string,
     *     PlatformBranchName?: string,
     *     PlatformBranchLifecycleState?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
