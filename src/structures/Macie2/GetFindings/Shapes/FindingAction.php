<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_API_CALL'|null $actionType
 * @property ApiCallDetails|null $apiCallDetails
 */
class FindingAction extends Shape
{
    /**
     * @param array{
     *     actionType?: 'AWS_API_CALL'|null,
     *     apiCallDetails?: ApiCallDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
