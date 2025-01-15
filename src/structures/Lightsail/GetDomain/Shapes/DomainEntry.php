<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $target
 * @property bool|null $isAlias
 * @property string|null $type
 * @property array<string, string>|null $options
 */
class DomainEntry extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     target?: string|null,
     *     isAlias?: bool|null,
     *     type?: string|null,
     *     options?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
