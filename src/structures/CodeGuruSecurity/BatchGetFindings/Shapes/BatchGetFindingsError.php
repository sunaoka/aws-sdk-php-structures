<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\BatchGetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scanName
 * @property string $findingId
 * @property 'DUPLICATE_IDENTIFIER'|'ITEM_DOES_NOT_EXIST'|'INTERNAL_ERROR'|'INVALID_FINDING_ID'|'INVALID_SCAN_NAME' $errorCode
 * @property string $message
 */
class BatchGetFindingsError extends Shape
{
    /**
     * @param array{
     *     scanName: string,
     *     findingId: string,
     *     errorCode: 'DUPLICATE_IDENTIFIER'|'ITEM_DOES_NOT_EXIST'|'INTERNAL_ERROR'|'INVALID_FINDING_ID'|'INVALID_SCAN_NAME',
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
