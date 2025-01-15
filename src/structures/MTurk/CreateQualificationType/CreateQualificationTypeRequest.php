<?php

namespace Sunaoka\Aws\Structures\MTurk\CreateQualificationType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Keywords
 * @property string $Description
 * @property 'Active'|'Inactive' $QualificationTypeStatus
 * @property int|null $RetryDelayInSeconds
 * @property string|null $Test
 * @property string|null $AnswerKey
 * @property int|null $TestDurationInSeconds
 * @property bool|null $AutoGranted
 * @property int|null $AutoGrantedValue
 */
class CreateQualificationTypeRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Keywords?: string|null,
     *     Description: string,
     *     QualificationTypeStatus: 'Active'|'Inactive',
     *     RetryDelayInSeconds?: int|null,
     *     Test?: string|null,
     *     AnswerKey?: string|null,
     *     TestDurationInSeconds?: int|null,
     *     AutoGranted?: bool|null,
     *     AutoGrantedValue?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
