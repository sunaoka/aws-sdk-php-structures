<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeConfigurationSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string $TemplateName
 * @property string $EnvironmentName
 */
class DescribeConfigurationSettingsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     TemplateName?: string,
     *     EnvironmentName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
