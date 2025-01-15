<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Classification
 * @property list<Configuration>|null $Configurations
 * @property array<string, string>|null $Properties
 */
class Configuration extends Shape
{
    /**
     * @param array{
     *     Classification?: string|null,
     *     Configurations?: list<Configuration>|null,
     *     Properties?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
