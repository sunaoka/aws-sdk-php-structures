<?php

namespace Sunaoka\Aws\Structures\LocationService\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ValidationError'|'InternalServerError' $Code
 * @property list<string>|null $Messages
 */
class JobError extends Shape
{
    /**
     * @param array{
     *     Code: 'ValidationError'|'InternalServerError',
     *     Messages?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
