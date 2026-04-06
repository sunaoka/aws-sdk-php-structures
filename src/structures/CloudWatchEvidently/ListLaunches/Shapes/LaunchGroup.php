<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\ListLaunches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property array<string, string> $featureVariations
 * @property string $name
 */
class LaunchGroup extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     featureVariations: array<string, string>,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
