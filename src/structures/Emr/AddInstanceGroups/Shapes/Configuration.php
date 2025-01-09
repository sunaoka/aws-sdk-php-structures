<?php

namespace Sunaoka\Aws\Structures\Emr\AddInstanceGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Classification
 * @property list<Configuration> $Configurations
 * @property array<string, string> $Properties
 */
class Configuration extends Shape
{
    /**
     * @param array{
     *     Classification?: string,
     *     Configurations?: list<Configuration>,
     *     Properties?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
