<?php

namespace Sunaoka\Aws\Structures\MigrationHub\NotifyApplicationState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED' $Status
 * @property \Aws\Api\DateTimeResult $UpdateDateTime
 * @property bool $DryRun
 */
class NotifyApplicationStateRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     Status: 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED',
     *     UpdateDateTime?: \Aws\Api\DateTimeResult,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
