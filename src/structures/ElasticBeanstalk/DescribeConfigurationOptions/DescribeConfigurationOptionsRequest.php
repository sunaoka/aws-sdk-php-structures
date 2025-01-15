<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeConfigurationOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ApplicationName
 * @property string|null $TemplateName
 * @property string|null $EnvironmentName
 * @property string|null $SolutionStackName
 * @property string|null $PlatformArn
 * @property list<Shapes\OptionSpecification>|null $Options
 */
class DescribeConfigurationOptionsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName?: string|null,
     *     TemplateName?: string|null,
     *     EnvironmentName?: string|null,
     *     SolutionStackName?: string|null,
     *     PlatformArn?: string|null,
     *     Options?: list<Shapes\OptionSpecification>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
