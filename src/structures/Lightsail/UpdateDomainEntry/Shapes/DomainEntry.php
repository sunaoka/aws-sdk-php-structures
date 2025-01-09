<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateDomainEntry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $target
 * @property bool $isAlias
 * @property string $type
 * @property array<string, string> $options
 */
class DomainEntry extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string,
     *     target?: string,
     *     isAlias?: bool,
     *     type?: string,
     *     options?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
