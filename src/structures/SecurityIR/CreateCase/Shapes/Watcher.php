<?php

namespace Sunaoka\Aws\Structures\SecurityIR\CreateCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $email
 * @property string|null $name
 * @property string|null $jobTitle
 */
class Watcher extends Shape
{
    /**
     * @param array{
     *     email: string,
     *     name?: string|null,
     *     jobTitle?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
