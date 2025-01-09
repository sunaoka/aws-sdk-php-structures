<?php

namespace Sunaoka\Aws\Structures\MTurk\ListReviewPolicyResultsForHIT\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActionId
 * @property string $ActionName
 * @property string $TargetId
 * @property string $TargetType
 * @property 'Intended'|'Succeeded'|'Failed'|'Cancelled' $Status
 * @property \Aws\Api\DateTimeResult $CompleteTime
 * @property string $Result
 * @property string $ErrorCode
 */
class ReviewActionDetail extends Shape
{
    /**
     * @param array{
     *     ActionId?: string,
     *     ActionName?: string,
     *     TargetId?: string,
     *     TargetType?: string,
     *     Status?: 'Intended'|'Succeeded'|'Failed'|'Cancelled',
     *     CompleteTime?: \Aws\Api\DateTimeResult,
     *     Result?: string,
     *     ErrorCode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
