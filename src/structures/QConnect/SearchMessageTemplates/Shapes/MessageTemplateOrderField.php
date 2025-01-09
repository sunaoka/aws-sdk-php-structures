<?php

namespace Sunaoka\Aws\Structures\QConnect\SearchMessageTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'ASC'|'DESC' $order
 */
class MessageTemplateOrderField extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     order?: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
