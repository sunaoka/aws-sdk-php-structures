<?php

namespace Sunaoka\Aws\Structures\Ssm\StartChangeRequestExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $ScheduledTime
 * @property string $DocumentName
 * @property string $DocumentVersion
 * @property array<string, list<string>> $Parameters
 * @property string $ChangeRequestName
 * @property string $ClientToken
 * @property bool $AutoApprove
 * @property list<Shapes\Runbook> $Runbooks
 * @property list<Shapes\Tag> $Tags
 * @property \Aws\Api\DateTimeResult $ScheduledEndTime
 * @property string $ChangeDetails
 */
class StartChangeRequestExecutionRequest extends Request
{
    /**
     * @param array{
     *     ScheduledTime?: \Aws\Api\DateTimeResult,
     *     DocumentName: string,
     *     DocumentVersion?: string,
     *     Parameters?: array<string, list<string>>,
     *     ChangeRequestName?: string,
     *     ClientToken?: string,
     *     AutoApprove?: bool,
     *     Runbooks: list<Shapes\Runbook>,
     *     Tags?: list<Shapes\Tag>,
     *     ScheduledEndTime?: \Aws\Api\DateTimeResult,
     *     ChangeDetails?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
