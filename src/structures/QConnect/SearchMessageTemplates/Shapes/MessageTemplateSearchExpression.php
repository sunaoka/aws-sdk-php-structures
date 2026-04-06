<?php

namespace Sunaoka\Aws\Structures\QConnect\SearchMessageTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MessageTemplateQueryField>|null $queries
 * @property list<MessageTemplateFilterField>|null $filters
 * @property MessageTemplateOrderField|null $orderOnField
 */
class MessageTemplateSearchExpression extends Shape
{
    /**
     * @param array{
     *     queries?: list<MessageTemplateQueryField>|null,
     *     filters?: list<MessageTemplateFilterField>|null,
     *     orderOnField?: MessageTemplateOrderField|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
