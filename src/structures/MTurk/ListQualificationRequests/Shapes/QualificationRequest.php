<?php

namespace Sunaoka\Aws\Structures\MTurk\ListQualificationRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QualificationRequestId
 * @property string $QualificationTypeId
 * @property string $WorkerId
 * @property string $Test
 * @property string $Answer
 * @property \Aws\Api\DateTimeResult $SubmitTime
 */
class QualificationRequest extends Shape
{
    /**
     * @param array{
     *     QualificationRequestId?: string,
     *     QualificationTypeId?: string,
     *     WorkerId?: string,
     *     Test?: string,
     *     Answer?: string,
     *     SubmitTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
