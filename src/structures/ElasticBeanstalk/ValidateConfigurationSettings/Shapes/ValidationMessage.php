<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ValidateConfigurationSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Message
 * @property 'error'|'warning'|null $Severity
 * @property string|null $Namespace
 * @property string|null $OptionName
 */
class ValidationMessage extends Shape
{
    /**
     * @param array{
     *     Message?: string|null,
     *     Severity?: 'error'|'warning'|null,
     *     Namespace?: string|null,
     *     OptionName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
