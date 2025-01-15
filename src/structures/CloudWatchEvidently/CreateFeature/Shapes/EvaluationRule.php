<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateFeature\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string $type
 */
class EvaluationRule extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
