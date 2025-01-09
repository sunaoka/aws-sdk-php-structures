<?php

namespace Sunaoka\Aws\Structures\Ses\ListConfigurationSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 */
class ConfigurationSet extends Shape
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
