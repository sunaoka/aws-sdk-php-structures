<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DeleteConfigurationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string $TemplateName
 */
class DeleteConfigurationTemplateRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     TemplateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
