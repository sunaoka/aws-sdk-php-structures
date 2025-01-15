<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreateConfigurationTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationName
 * @property string|null $TemplateName
 */
class SourceConfiguration extends Shape
{
    /**
     * @param array{
     *     ApplicationName?: string|null,
     *     TemplateName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
