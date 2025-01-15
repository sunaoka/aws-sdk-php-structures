<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribePlatformVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PlatformArn
 * @property string|null $PlatformOwner
 * @property string|null $PlatformName
 * @property string|null $PlatformVersion
 * @property string|null $SolutionStackName
 * @property 'Creating'|'Failed'|'Ready'|'Deleting'|'Deleted'|null $PlatformStatus
 * @property \Aws\Api\DateTimeResult|null $DateCreated
 * @property \Aws\Api\DateTimeResult|null $DateUpdated
 * @property string|null $PlatformCategory
 * @property string|null $Description
 * @property string|null $Maintainer
 * @property string|null $OperatingSystemName
 * @property string|null $OperatingSystemVersion
 * @property list<PlatformProgrammingLanguage>|null $ProgrammingLanguages
 * @property list<PlatformFramework>|null $Frameworks
 * @property list<CustomAmi>|null $CustomAmiList
 * @property list<string>|null $SupportedTierList
 * @property list<string>|null $SupportedAddonList
 * @property string|null $PlatformLifecycleState
 * @property string|null $PlatformBranchName
 * @property string|null $PlatformBranchLifecycleState
 */
class PlatformDescription extends Shape
{
    /**
     * @param array{
     *     PlatformArn?: string|null,
     *     PlatformOwner?: string|null,
     *     PlatformName?: string|null,
     *     PlatformVersion?: string|null,
     *     SolutionStackName?: string|null,
     *     PlatformStatus?: 'Creating'|'Failed'|'Ready'|'Deleting'|'Deleted'|null,
     *     DateCreated?: \Aws\Api\DateTimeResult|null,
     *     DateUpdated?: \Aws\Api\DateTimeResult|null,
     *     PlatformCategory?: string|null,
     *     Description?: string|null,
     *     Maintainer?: string|null,
     *     OperatingSystemName?: string|null,
     *     OperatingSystemVersion?: string|null,
     *     ProgrammingLanguages?: list<PlatformProgrammingLanguage>|null,
     *     Frameworks?: list<PlatformFramework>|null,
     *     CustomAmiList?: list<CustomAmi>|null,
     *     SupportedTierList?: list<string>|null,
     *     SupportedAddonList?: list<string>|null,
     *     PlatformLifecycleState?: string|null,
     *     PlatformBranchName?: string|null,
     *     PlatformBranchLifecycleState?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
