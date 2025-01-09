<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PostText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property ActiveContextTimeToLive $timeToLive
 * @property array<string, string> $parameters
 */
class ActiveContext extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     timeToLive: ActiveContextTimeToLive,
     *     parameters: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
