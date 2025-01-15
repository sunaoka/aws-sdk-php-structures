<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListSpaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $regionName
 * @property string|null $displayName
 * @property string|null $description
 */
class SpaceSummary extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     regionName: string,
     *     displayName?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
