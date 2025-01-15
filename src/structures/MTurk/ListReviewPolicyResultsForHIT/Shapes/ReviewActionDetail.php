<?php

namespace Sunaoka\Aws\Structures\MTurk\ListReviewPolicyResultsForHIT\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ActionId
 * @property string|null $ActionName
 * @property string|null $TargetId
 * @property string|null $TargetType
 * @property 'Intended'|'Succeeded'|'Failed'|'Cancelled'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CompleteTime
 * @property string|null $Result
 * @property string|null $ErrorCode
 */
class ReviewActionDetail extends Shape
{
    /**
     * @param array{
     *     ActionId?: string|null,
     *     ActionName?: string|null,
     *     TargetId?: string|null,
     *     TargetType?: string|null,
     *     Status?: 'Intended'|'Succeeded'|'Failed'|'Cancelled'|null,
     *     CompleteTime?: \Aws\Api\DateTimeResult|null,
     *     Result?: string|null,
     *     ErrorCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
