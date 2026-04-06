<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property string|null $value
 */
class TagCondition extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
