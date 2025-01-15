<?php

namespace Sunaoka\Aws\Structures\ConnectCases\PutCaseEventConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CaseEventIncludedData|null $caseData
 * @property RelatedItemEventIncludedData|null $relatedItemData
 */
class EventIncludedData extends Shape
{
    /**
     * @param array{
     *     caseData?: CaseEventIncludedData|null,
     *     relatedItemData?: RelatedItemEventIncludedData|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
