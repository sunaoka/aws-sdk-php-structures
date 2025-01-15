<?php

namespace Sunaoka\Aws\Structures\QConnect\SearchQuickResponses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<QuickResponseFilterField>|null $filters
 * @property QuickResponseOrderField|null $orderOnField
 * @property list<QuickResponseQueryField>|null $queries
 */
class QuickResponseSearchExpression extends Shape
{
    /**
     * @param array{
     *     filters?: list<QuickResponseFilterField>|null,
     *     orderOnField?: QuickResponseOrderField|null,
     *     queries?: list<QuickResponseQueryField>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
