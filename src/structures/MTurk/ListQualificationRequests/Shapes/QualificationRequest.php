<?php

namespace Sunaoka\Aws\Structures\MTurk\ListQualificationRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QualificationRequestId
 * @property string|null $QualificationTypeId
 * @property string|null $WorkerId
 * @property string|null $Test
 * @property string|null $Answer
 * @property \Aws\Api\DateTimeResult|null $SubmitTime
 */
class QualificationRequest extends Shape
{
    /**
     * @param array{
     *     QualificationRequestId?: string|null,
     *     QualificationTypeId?: string|null,
     *     WorkerId?: string|null,
     *     Test?: string|null,
     *     Answer?: string|null,
     *     SubmitTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
