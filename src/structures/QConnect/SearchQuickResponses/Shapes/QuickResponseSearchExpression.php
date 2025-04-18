<?php

namespace Sunaoka\Aws\Structures\QConnect\SearchQuickResponses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<QuickResponseQueryField>|null $queries
 * @property list<QuickResponseFilterField>|null $filters
 * @property QuickResponseOrderField|null $orderOnField
 */
class QuickResponseSearchExpression extends Shape
{
    /**
     * @param array{
     *     queries?: list<QuickResponseQueryField>|null,
     *     filters?: list<QuickResponseFilterField>|null,
     *     orderOnField?: QuickResponseOrderField|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
