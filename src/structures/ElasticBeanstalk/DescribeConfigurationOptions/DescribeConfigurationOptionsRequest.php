<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeConfigurationOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string $TemplateName
 * @property string $EnvironmentName
 * @property string $SolutionStackName
 * @property string $PlatformArn
 * @property list<Shapes\OptionSpecification> $Options
 */
class DescribeConfigurationOptionsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName?: string,
     *     TemplateName?: string,
     *     EnvironmentName?: string,
     *     SolutionStackName?: string,
     *     PlatformArn?: string,
     *     Options?: list<Shapes\OptionSpecification>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
