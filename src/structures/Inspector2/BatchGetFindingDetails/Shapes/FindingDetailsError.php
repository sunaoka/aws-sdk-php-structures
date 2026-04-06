<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetFindingDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INTERNAL_ERROR'|'ACCESS_DENIED'|'FINDING_DETAILS_NOT_FOUND'|'INVALID_INPUT' $errorCode
 * @property string $errorMessage
 * @property string $findingArn
 */
class FindingDetailsError extends Shape
{
    /**
     * @param array{
     *     errorCode: 'INTERNAL_ERROR'|'ACCESS_DENIED'|'FINDING_DETAILS_NOT_FOUND'|'INVALID_INPUT',
     *     errorMessage: string,
     *     findingArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
