<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreatePlatformVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PlatformArn
 * @property string|null $PlatformOwner
 * @property 'Creating'|'Failed'|'Ready'|'Deleting'|'Deleted'|null $PlatformStatus
 * @property string|null $PlatformCategory
 * @property string|null $OperatingSystemName
 * @property string|null $OperatingSystemVersion
 * @property list<string>|null $SupportedTierList
 * @property list<string>|null $SupportedAddonList
 * @property string|null $PlatformLifecycleState
 * @property string|null $PlatformVersion
 * @property string|null $PlatformBranchName
 * @property string|null $PlatformBranchLifecycleState
 */
class PlatformSummary extends Shape
{
    /**
     * @param array{
     *     PlatformArn?: string|null,
     *     PlatformOwner?: string|null,
     *     PlatformStatus?: 'Creating'|'Failed'|'Ready'|'Deleting'|'Deleted'|null,
     *     PlatformCategory?: string|null,
     *     OperatingSystemName?: string|null,
     *     OperatingSystemVersion?: string|null,
     *     SupportedTierList?: list<string>|null,
     *     SupportedAddonList?: list<string>|null,
     *     PlatformLifecycleState?: string|null,
     *     PlatformVersion?: string|null,
     *     PlatformBranchName?: string|null,
     *     PlatformBranchLifecycleState?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
