<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\SearchQuickResponses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<QuickResponseFilterField> $filters
 * @property QuickResponseOrderField $orderOnField
 * @property list<QuickResponseQueryField> $queries
 */
class QuickResponseSearchExpression extends Shape
{
    /**
     * @param array{
     *     filters?: list<QuickResponseFilterField>,
     *     orderOnField?: QuickResponseOrderField,
     *     queries?: list<QuickResponseQueryField>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
