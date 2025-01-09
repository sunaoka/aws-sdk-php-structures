<?php

namespace Sunaoka\Aws\Structures\QConnect\SearchMessageTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MessageTemplateFilterField> $filters
 * @property MessageTemplateOrderField $orderOnField
 * @property list<MessageTemplateQueryField> $queries
 */
class MessageTemplateSearchExpression extends Shape
{
    /**
     * @param array{
     *     filters?: list<MessageTemplateFilterField>,
     *     orderOnField?: MessageTemplateOrderField,
     *     queries?: list<MessageTemplateQueryField>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
