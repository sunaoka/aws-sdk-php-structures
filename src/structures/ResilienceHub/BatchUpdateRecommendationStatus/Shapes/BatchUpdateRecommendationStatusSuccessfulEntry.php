<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\BatchUpdateRecommendationStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appComponentId
 * @property string $entryId
 * @property 'AlreadyImplemented'|'NotRelevant'|'ComplexityOfImplementation' $excludeReason
 * @property bool $excluded
 * @property UpdateRecommendationStatusItem $item
 * @property string $referenceId
 */
class BatchUpdateRecommendationStatusSuccessfulEntry extends Shape
{
    /**
     * @param array{
     *     appComponentId?: string,
     *     entryId: string,
     *     excludeReason?: 'AlreadyImplemented'|'NotRelevant'|'ComplexityOfImplementation',
     *     excluded: bool,
     *     item?: UpdateRecommendationStatusItem,
     *     referenceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
