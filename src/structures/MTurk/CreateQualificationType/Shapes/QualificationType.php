<?php

namespace Sunaoka\Aws\Structures\MTurk\CreateQualificationType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QualificationTypeId
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $Name
 * @property string $Description
 * @property string $Keywords
 * @property 'Active'|'Inactive' $QualificationTypeStatus
 * @property string $Test
 * @property int $TestDurationInSeconds
 * @property string $AnswerKey
 * @property int $RetryDelayInSeconds
 * @property bool $IsRequestable
 * @property bool $AutoGranted
 * @property int $AutoGrantedValue
 */
class QualificationType extends Shape
{
    /**
     * @param array{
     *     QualificationTypeId?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     Name?: string,
     *     Description?: string,
     *     Keywords?: string,
     *     QualificationTypeStatus?: 'Active'|'Inactive',
     *     Test?: string,
     *     TestDurationInSeconds?: int,
     *     AnswerKey?: string,
     *     RetryDelayInSeconds?: int,
     *     IsRequestable?: bool,
     *     AutoGranted?: bool,
     *     AutoGrantedValue?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
