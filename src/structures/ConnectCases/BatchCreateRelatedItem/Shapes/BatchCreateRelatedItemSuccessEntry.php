<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchCreateRelatedItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CaseIdentifier $caseIdentifier
 * @property string $relatedItemId
 * @property string $relatedItemArn
 */
class BatchCreateRelatedItemSuccessEntry extends Shape
{
    /**
     * @param array{
     *     caseIdentifier: CaseIdentifier,
     *     relatedItemId: string,
     *     relatedItemArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
