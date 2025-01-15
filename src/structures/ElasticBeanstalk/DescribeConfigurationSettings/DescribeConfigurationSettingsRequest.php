<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeConfigurationSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string|null $TemplateName
 * @property string|null $EnvironmentName
 */
class DescribeConfigurationSettingsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     TemplateName?: string|null,
     *     EnvironmentName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
