<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property array<string, string> $featureVariations
 * @property string $name
 */
class Treatment extends Shape
{
    /**
     * @param array{
     *     description?: string,
     *     featureVariations?: array<string, string>,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
