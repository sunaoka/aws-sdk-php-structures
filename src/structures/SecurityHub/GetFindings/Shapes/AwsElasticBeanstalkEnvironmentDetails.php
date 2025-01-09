<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationName
 * @property string $Cname
 * @property string $DateCreated
 * @property string $DateUpdated
 * @property string $Description
 * @property string $EndpointUrl
 * @property string $EnvironmentArn
 * @property string $EnvironmentId
 * @property list<AwsElasticBeanstalkEnvironmentEnvironmentLink> $EnvironmentLinks
 * @property string $EnvironmentName
 * @property list<AwsElasticBeanstalkEnvironmentOptionSetting> $OptionSettings
 * @property string $PlatformArn
 * @property string $SolutionStackName
 * @property string $Status
 * @property AwsElasticBeanstalkEnvironmentTier $Tier
 * @property string $VersionLabel
 */
class AwsElasticBeanstalkEnvironmentDetails extends Shape
{
    /**
     * @param array{
     *     ApplicationName?: string,
     *     Cname?: string,
     *     DateCreated?: string,
     *     DateUpdated?: string,
     *     Description?: string,
     *     EndpointUrl?: string,
     *     EnvironmentArn?: string,
     *     EnvironmentId?: string,
     *     EnvironmentLinks?: list<AwsElasticBeanstalkEnvironmentEnvironmentLink>,
     *     EnvironmentName?: string,
     *     OptionSettings?: list<AwsElasticBeanstalkEnvironmentOptionSetting>,
     *     PlatformArn?: string,
     *     SolutionStackName?: string,
     *     Status?: string,
     *     Tier?: AwsElasticBeanstalkEnvironmentTier,
     *     VersionLabel?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
