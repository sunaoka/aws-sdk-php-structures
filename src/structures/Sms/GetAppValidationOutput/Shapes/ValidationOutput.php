<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppValidationOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $validationId
 * @property string $name
 * @property 'READY_FOR_VALIDATION'|'PENDING'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $status
 * @property string $statusMessage
 * @property \Aws\Api\DateTimeResult $latestValidationTime
 * @property AppValidationOutput $appValidationOutput
 * @property ServerValidationOutput $serverValidationOutput
 */
class ValidationOutput extends Shape
{
    /**
     * @param array{
     *     validationId?: string,
     *     name?: string,
     *     status?: 'READY_FOR_VALIDATION'|'PENDING'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED',
     *     statusMessage?: string,
     *     latestValidationTime?: \Aws\Api\DateTimeResult,
     *     appValidationOutput?: AppValidationOutput,
     *     serverValidationOutput?: ServerValidationOutput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
