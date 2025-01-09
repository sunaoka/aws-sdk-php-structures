<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetCaseEventConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CaseEventIncludedData $caseData
 * @property RelatedItemEventIncludedData $relatedItemData
 */
class EventIncludedData extends Shape
{
    /**
     * @param array{
     *     caseData?: CaseEventIncludedData,
     *     relatedItemData?: RelatedItemEventIncludedData
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
