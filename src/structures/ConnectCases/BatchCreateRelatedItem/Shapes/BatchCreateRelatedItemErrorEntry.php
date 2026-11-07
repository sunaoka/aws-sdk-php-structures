<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchCreateRelatedItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CaseIdentifier $caseIdentifier
 * @property string $errorCode
 * @property string $errorMessage
 */
class BatchCreateRelatedItemErrorEntry extends Shape
{
    /**
     * @param array{
     *     caseIdentifier: CaseIdentifier,
     *     errorCode: string,
     *     errorMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
