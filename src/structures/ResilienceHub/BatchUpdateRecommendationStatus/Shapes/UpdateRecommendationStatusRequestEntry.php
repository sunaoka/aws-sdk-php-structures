<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\BatchUpdateRecommendationStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $appComponentId
 * @property string $entryId
 * @property 'AlreadyImplemented'|'NotRelevant'|'ComplexityOfImplementation'|null $excludeReason
 * @property bool $excluded
 * @property UpdateRecommendationStatusItem|null $item
 * @property string $referenceId
 */
class UpdateRecommendationStatusRequestEntry extends Shape
{
    /**
     * @param array{
     *     appComponentId?: string|null,
     *     entryId: string,
     *     excludeReason?: 'AlreadyImplemented'|'NotRelevant'|'ComplexityOfImplementation'|null,
     *     excluded: bool,
     *     item?: UpdateRecommendationStatusItem|null,
     *     referenceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
