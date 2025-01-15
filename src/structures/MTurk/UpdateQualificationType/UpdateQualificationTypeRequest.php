<?php

namespace Sunaoka\Aws\Structures\MTurk\UpdateQualificationType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QualificationTypeId
 * @property string|null $Description
 * @property 'Active'|'Inactive'|null $QualificationTypeStatus
 * @property string|null $Test
 * @property string|null $AnswerKey
 * @property int|null $TestDurationInSeconds
 * @property int|null $RetryDelayInSeconds
 * @property bool|null $AutoGranted
 * @property int|null $AutoGrantedValue
 */
class UpdateQualificationTypeRequest extends Request
{
    /**
     * @param array{
     *     QualificationTypeId: string,
     *     Description?: string|null,
     *     QualificationTypeStatus?: 'Active'|'Inactive'|null,
     *     Test?: string|null,
     *     AnswerKey?: string|null,
     *     TestDurationInSeconds?: int|null,
     *     RetryDelayInSeconds?: int|null,
     *     AutoGranted?: bool|null,
     *     AutoGrantedValue?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
