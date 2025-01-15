<?php

namespace Sunaoka\Aws\Structures\MTurk\UpdateQualificationType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QualificationTypeId
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $Keywords
 * @property 'Active'|'Inactive'|null $QualificationTypeStatus
 * @property string|null $Test
 * @property int|null $TestDurationInSeconds
 * @property string|null $AnswerKey
 * @property int|null $RetryDelayInSeconds
 * @property bool|null $IsRequestable
 * @property bool|null $AutoGranted
 * @property int|null $AutoGrantedValue
 */
class QualificationType extends Shape
{
    /**
     * @param array{
     *     QualificationTypeId?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Keywords?: string|null,
     *     QualificationTypeStatus?: 'Active'|'Inactive'|null,
     *     Test?: string|null,
     *     TestDurationInSeconds?: int|null,
     *     AnswerKey?: string|null,
     *     RetryDelayInSeconds?: int|null,
     *     IsRequestable?: bool|null,
     *     AutoGranted?: bool|null,
     *     AutoGrantedValue?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
