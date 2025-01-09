<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<OverallTestResultItem> $items
 */
class OverallTestResults extends Shape
{
    /**
     * @param array{items: list<OverallTestResultItem>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
