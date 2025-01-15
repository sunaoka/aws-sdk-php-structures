<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceName
 * @property string|null $Namespace
 * @property string|null $OptionName
 */
class OptionSpecification extends Shape
{
    /**
     * @param array{
     *     ResourceName?: string|null,
     *     Namespace?: string|null,
     *     OptionName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
