<?php

namespace Sunaoka\Aws\Structures\MTurk\UpdateQualificationType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QualificationTypeId
 * @property string $Description
 * @property 'Active'|'Inactive' $QualificationTypeStatus
 * @property string $Test
 * @property string $AnswerKey
 * @property int $TestDurationInSeconds
 * @property int $RetryDelayInSeconds
 * @property bool $AutoGranted
 * @property int $AutoGrantedValue
 */
class UpdateQualificationTypeRequest extends Request
{
    /**
     * @param array{
     *     QualificationTypeId: string,
     *     Description?: string,
     *     QualificationTypeStatus?: 'Active'|'Inactive',
     *     Test?: string,
     *     AnswerKey?: string,
     *     TestDurationInSeconds?: int,
     *     RetryDelayInSeconds?: int,
     *     AutoGranted?: bool,
     *     AutoGrantedValue?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
