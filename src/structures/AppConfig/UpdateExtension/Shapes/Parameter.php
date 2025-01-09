<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateExtension\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property bool $Required
 * @property bool $Dynamic
 */
class Parameter extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     Required?: bool,
     *     Dynamic?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
