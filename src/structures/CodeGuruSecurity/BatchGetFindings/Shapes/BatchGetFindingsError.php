<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\BatchGetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DUPLICATE_IDENTIFIER'|'ITEM_DOES_NOT_EXIST'|'INTERNAL_ERROR'|'INVALID_FINDING_ID'|'INVALID_SCAN_NAME' $errorCode
 * @property string $findingId
 * @property string $message
 * @property string $scanName
 */
class BatchGetFindingsError extends Shape
{
    /**
     * @param array{
     *     errorCode: 'DUPLICATE_IDENTIFIER'|'ITEM_DOES_NOT_EXIST'|'INTERNAL_ERROR'|'INVALID_FINDING_ID'|'INVALID_SCAN_NAME',
     *     findingId: string,
     *     message: string,
     *     scanName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
