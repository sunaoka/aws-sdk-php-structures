<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationName
 * @property string|null $Cname
 * @property string|null $DateCreated
 * @property string|null $DateUpdated
 * @property string|null $Description
 * @property string|null $EndpointUrl
 * @property string|null $EnvironmentArn
 * @property string|null $EnvironmentId
 * @property list<AwsElasticBeanstalkEnvironmentEnvironmentLink>|null $EnvironmentLinks
 * @property string|null $EnvironmentName
 * @property list<AwsElasticBeanstalkEnvironmentOptionSetting>|null $OptionSettings
 * @property string|null $PlatformArn
 * @property string|null $SolutionStackName
 * @property string|null $Status
 * @property AwsElasticBeanstalkEnvironmentTier|null $Tier
 * @property string|null $VersionLabel
 */
class AwsElasticBeanstalkEnvironmentDetails extends Shape
{
    /**
     * @param array{
     *     ApplicationName?: string|null,
     *     Cname?: string|null,
     *     DateCreated?: string|null,
     *     DateUpdated?: string|null,
     *     Description?: string|null,
     *     EndpointUrl?: string|null,
     *     EnvironmentArn?: string|null,
     *     EnvironmentId?: string|null,
     *     EnvironmentLinks?: list<AwsElasticBeanstalkEnvironmentEnvironmentLink>|null,
     *     EnvironmentName?: string|null,
     *     OptionSettings?: list<AwsElasticBeanstalkEnvironmentOptionSetting>|null,
     *     PlatformArn?: string|null,
     *     SolutionStackName?: string|null,
     *     Status?: string|null,
     *     Tier?: AwsElasticBeanstalkEnvironmentTier|null,
     *     VersionLabel?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
