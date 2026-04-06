<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property array<string, string>|null $featureVariations
 * @property string $name
 */
class Treatment extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     featureVariations?: array<string, string>|null,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
