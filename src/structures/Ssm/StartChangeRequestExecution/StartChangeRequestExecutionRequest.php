<?php

namespace Sunaoka\Aws\Structures\Ssm\StartChangeRequestExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $ScheduledTime
 * @property string $DocumentName
 * @property string|null $DocumentVersion
 * @property array<string, list<string>>|null $Parameters
 * @property string|null $ChangeRequestName
 * @property string|null $ClientToken
 * @property bool|null $AutoApprove
 * @property list<Shapes\Runbook> $Runbooks
 * @property list<Shapes\Tag>|null $Tags
 * @property \Aws\Api\DateTimeResult|null $ScheduledEndTime
 * @property string|null $ChangeDetails
 */
class StartChangeRequestExecutionRequest extends Request
{
    /**
     * @param array{
     *     ScheduledTime?: \Aws\Api\DateTimeResult|null,
     *     DocumentName: string,
     *     DocumentVersion?: string|null,
     *     Parameters?: array<string, list<string>>|null,
     *     ChangeRequestName?: string|null,
     *     ClientToken?: string|null,
     *     AutoApprove?: bool|null,
     *     Runbooks: list<Shapes\Runbook>,
     *     Tags?: list<Shapes\Tag>|null,
     *     ScheduledEndTime?: \Aws\Api\DateTimeResult|null,
     *     ChangeDetails?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
