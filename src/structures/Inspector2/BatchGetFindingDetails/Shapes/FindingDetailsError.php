<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetFindingDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $findingArn
 * @property 'INTERNAL_ERROR'|'ACCESS_DENIED'|'FINDING_DETAILS_NOT_FOUND'|'INVALID_INPUT' $errorCode
 * @property string $errorMessage
 */
class FindingDetailsError extends Shape
{
    /**
     * @param array{
     *     findingArn: string,
     *     errorCode: 'INTERNAL_ERROR'|'ACCESS_DENIED'|'FINDING_DETAILS_NOT_FOUND'|'INVALID_INPUT',
     *     errorMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
