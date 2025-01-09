<?php

namespace Sunaoka\Aws\Structures\AppConfig\GetConfigurationProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JSON_SCHEMA'|'LAMBDA' $Type
 * @property string $Content
 */
class Validator extends Shape
{
    /**
     * @param array{
     *     Type: 'JSON_SCHEMA'|'LAMBDA',
     *     Content: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
