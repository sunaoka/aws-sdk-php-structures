<?php

namespace Sunaoka\Aws\Structures\AppConfig\GetExtension\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property bool|null $Required
 * @property bool|null $Dynamic
 */
class Parameter extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Required?: bool|null,
     *     Dynamic?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
