<?php

namespace Sunaoka\Aws\Structures\Emr\RunJobFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property list<string>|null $Args
 */
class SupportedProductConfig extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Args?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
