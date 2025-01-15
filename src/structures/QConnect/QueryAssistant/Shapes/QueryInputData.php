<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IntentInputData|null $intentInputData
 * @property QueryTextInputData|null $queryTextInputData
 */
class QueryInputData extends Shape
{
    /**
     * @param array{
     *     intentInputData?: IntentInputData|null,
     *     queryTextInputData?: QueryTextInputData|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
