<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\RecognizeText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property ActiveContextTimeToLive $timeToLive
 * @property array<string, string> $contextAttributes
 */
class ActiveContext extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     timeToLive: ActiveContextTimeToLive,
     *     contextAttributes: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
