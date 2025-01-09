<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListCuratedEnvironmentImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $description
 * @property list<string> $versions
 */
class EnvironmentImage extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     description?: string,
     *     versions?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
