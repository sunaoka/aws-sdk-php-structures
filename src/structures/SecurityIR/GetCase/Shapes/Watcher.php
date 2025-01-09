<?php

namespace Sunaoka\Aws\Structures\SecurityIR\GetCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $email
 * @property string $name
 * @property string $jobTitle
 */
class Watcher extends Shape
{
    /**
     * @param array{
     *     email: string,
     *     name?: string,
     *     jobTitle?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
