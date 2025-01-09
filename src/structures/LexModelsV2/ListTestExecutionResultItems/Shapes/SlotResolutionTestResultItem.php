<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $slotName
 * @property SlotResolutionTestResultItemCounts $resultCounts
 */
class SlotResolutionTestResultItem extends Shape
{
    /**
     * @param array{
     *     slotName: string,
     *     resultCounts: SlotResolutionTestResultItemCounts
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
