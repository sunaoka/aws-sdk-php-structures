<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StringValue
 */
class ContactEvaluationAttributeValue extends Shape
{
    /**
     * @param array{StringValue?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
