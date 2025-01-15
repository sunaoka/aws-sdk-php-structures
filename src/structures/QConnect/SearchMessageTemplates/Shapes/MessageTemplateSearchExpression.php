<?php

namespace Sunaoka\Aws\Structures\QConnect\SearchMessageTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MessageTemplateFilterField>|null $filters
 * @property MessageTemplateOrderField|null $orderOnField
 * @property list<MessageTemplateQueryField>|null $queries
 */
class MessageTemplateSearchExpression extends Shape
{
    /**
     * @param array{
     *     filters?: list<MessageTemplateFilterField>|null,
     *     orderOnField?: MessageTemplateOrderField|null,
     *     queries?: list<MessageTemplateQueryField>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
