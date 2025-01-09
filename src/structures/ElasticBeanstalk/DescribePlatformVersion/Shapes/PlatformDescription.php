<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribePlatformVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PlatformArn
 * @property string $PlatformOwner
 * @property string $PlatformName
 * @property string $PlatformVersion
 * @property string $SolutionStackName
 * @property 'Creating'|'Failed'|'Ready'|'Deleting'|'Deleted' $PlatformStatus
 * @property \Aws\Api\DateTimeResult $DateCreated
 * @property \Aws\Api\DateTimeResult $DateUpdated
 * @property string $PlatformCategory
 * @property string $Description
 * @property string $Maintainer
 * @property string $OperatingSystemName
 * @property string $OperatingSystemVersion
 * @property list<PlatformProgrammingLanguage> $ProgrammingLanguages
 * @property list<PlatformFramework> $Frameworks
 * @property list<CustomAmi> $CustomAmiList
 * @property list<string> $SupportedTierList
 * @property list<string> $SupportedAddonList
 * @property string $PlatformLifecycleState
 * @property string $PlatformBranchName
 * @property string $PlatformBranchLifecycleState
 */
class PlatformDescription extends Shape
{
    /**
     * @param array{
     *     PlatformArn?: string,
     *     PlatformOwner?: string,
     *     PlatformName?: string,
     *     PlatformVersion?: string,
     *     SolutionStackName?: string,
     *     PlatformStatus?: 'Creating'|'Failed'|'Ready'|'Deleting'|'Deleted',
     *     DateCreated?: \Aws\Api\DateTimeResult,
     *     DateUpdated?: \Aws\Api\DateTimeResult,
     *     PlatformCategory?: string,
     *     Description?: string,
     *     Maintainer?: string,
     *     OperatingSystemName?: string,
     *     OperatingSystemVersion?: string,
     *     ProgrammingLanguages?: list<PlatformProgrammingLanguage>,
     *     Frameworks?: list<PlatformFramework>,
     *     CustomAmiList?: list<CustomAmi>,
     *     SupportedTierList?: list<string>,
     *     SupportedAddonList?: list<string>,
     *     PlatformLifecycleState?: string,
     *     PlatformBranchName?: string,
     *     PlatformBranchLifecycleState?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
