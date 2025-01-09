<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreateConfigurationTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationName
 * @property string $TemplateName
 */
class SourceConfiguration extends Shape
{
    /**
     * @param array{
     *     ApplicationName?: string,
     *     TemplateName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
