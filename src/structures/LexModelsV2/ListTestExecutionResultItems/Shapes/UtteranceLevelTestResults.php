<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<UtteranceLevelTestResultItem> $items
 */
class UtteranceLevelTestResults extends Shape
{
    /**
     * @param array{items: list<UtteranceLevelTestResultItem>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
