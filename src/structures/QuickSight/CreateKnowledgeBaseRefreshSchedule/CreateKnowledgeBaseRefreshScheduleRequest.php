<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateKnowledgeBaseRefreshSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $KnowledgeBaseId
 * @property string $ScheduleId
 * @property Shapes\KnowledgeBaseRefreshFrequency $ScheduleFrequency
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property 'ENABLED'|'DISABLED'|null $State
 */
class CreateKnowledgeBaseRefreshScheduleRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     KnowledgeBaseId: string,
     *     ScheduleId: string,
     *     ScheduleFrequency: Shapes\KnowledgeBaseRefreshFrequency,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     State?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
