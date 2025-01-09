<?php

namespace Sunaoka\Aws\Structures\MTurk\CreateQualificationType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Keywords
 * @property string $Description
 * @property 'Active'|'Inactive' $QualificationTypeStatus
 * @property int $RetryDelayInSeconds
 * @property string $Test
 * @property string $AnswerKey
 * @property int $TestDurationInSeconds
 * @property bool $AutoGranted
 * @property int $AutoGrantedValue
 */
class CreateQualificationTypeRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Keywords?: string,
     *     Description: string,
     *     QualificationTypeStatus: 'Active'|'Inactive',
     *     RetryDelayInSeconds?: int,
     *     Test?: string,
     *     AnswerKey?: string,
     *     TestDurationInSeconds?: int,
     *     AutoGranted?: bool,
     *     AutoGrantedValue?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
