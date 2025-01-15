<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppValidationOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $validationId
 * @property string|null $name
 * @property 'READY_FOR_VALIDATION'|'PENDING'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null $status
 * @property string|null $statusMessage
 * @property \Aws\Api\DateTimeResult|null $latestValidationTime
 * @property AppValidationOutput|null $appValidationOutput
 * @property ServerValidationOutput|null $serverValidationOutput
 */
class ValidationOutput extends Shape
{
    /**
     * @param array{
     *     validationId?: string|null,
     *     name?: string|null,
     *     status?: 'READY_FOR_VALIDATION'|'PENDING'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null,
     *     statusMessage?: string|null,
     *     latestValidationTime?: \Aws\Api\DateTimeResult|null,
     *     appValidationOutput?: AppValidationOutput|null,
     *     serverValidationOutput?: ServerValidationOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
