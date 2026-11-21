<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateKnowledgeBaseRefreshSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $KnowledgeBaseId
 * @property string $ScheduleId
 * @property Shapes\KnowledgeBaseRefreshFrequency|null $ScheduleFrequency
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property 'ENABLED'|'DISABLED'|null $State
 */
class UpdateKnowledgeBaseRefreshScheduleRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     KnowledgeBaseId: string,
     *     ScheduleId: string,
     *     ScheduleFrequency?: Shapes\KnowledgeBaseRefreshFrequency|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     State?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
