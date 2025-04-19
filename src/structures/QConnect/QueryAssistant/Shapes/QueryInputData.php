<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QueryTextInputData|null $queryTextInputData
 * @property IntentInputData|null $intentInputData
 */
class QueryInputData extends Shape
{
    /**
     * @param array{
     *     queryTextInputData?: QueryTextInputData|null,
     *     intentInputData?: IntentInputData|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
