<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListCuratedEnvironmentImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $description
 * @property list<string>|null $versions
 */
class EnvironmentImage extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     description?: string|null,
     *     versions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
