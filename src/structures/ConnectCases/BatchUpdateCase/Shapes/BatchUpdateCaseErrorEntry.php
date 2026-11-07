<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchUpdateCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CaseIdentifier $caseIdentifier
 * @property string $errorCode
 * @property string $errorMessage
 */
class BatchUpdateCaseErrorEntry extends Shape
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
