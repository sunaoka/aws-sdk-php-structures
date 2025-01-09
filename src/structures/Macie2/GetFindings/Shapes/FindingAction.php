<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_API_CALL' $actionType
 * @property ApiCallDetails $apiCallDetails
 */
class FindingAction extends Shape
{
    /**
     * @param array{
     *     actionType?: 'AWS_API_CALL',
     *     apiCallDetails?: ApiCallDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
