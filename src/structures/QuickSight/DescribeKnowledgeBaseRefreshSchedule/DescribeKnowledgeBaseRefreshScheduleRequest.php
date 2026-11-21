<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeKnowledgeBaseRefreshSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $KnowledgeBaseId
 * @property string $ScheduleId
 */
class DescribeKnowledgeBaseRefreshScheduleRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     KnowledgeBaseId: string,
     *     ScheduleId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
