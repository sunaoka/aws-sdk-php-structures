<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ValidateConfigurationSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Message
 * @property 'error'|'warning' $Severity
 * @property string $Namespace
 * @property string $OptionName
 */
class ValidationMessage extends Shape
{
    /**
     * @param array{
     *     Message?: string,
     *     Severity?: 'error'|'warning',
     *     Namespace?: string,
     *     OptionName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
