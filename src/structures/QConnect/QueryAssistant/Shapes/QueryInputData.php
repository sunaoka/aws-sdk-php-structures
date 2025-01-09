<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IntentInputData $intentInputData
 * @property QueryTextInputData $queryTextInputData
 */
class QueryInputData extends Shape
{
    /**
     * @param array{
     *     intentInputData?: IntentInputData,
     *     queryTextInputData?: QueryTextInputData
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
