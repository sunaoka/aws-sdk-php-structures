<?php

namespace Sunaoka\Aws\Structures\SecurityIR\ListInvestigations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $investigationId
 * @property 'Evidence'|'Investigation'|'Summarization' $actionType
 * @property string $title
 * @property string $content
 * @property 'Pending'|'InProgress'|'Waiting'|'Completed'|'Failed'|'Cancelled' $status
 * @property \Aws\Api\DateTimeResult $lastUpdated
 * @property InvestigationFeedback|null $feedback
 */
class InvestigationAction extends Shape
{
    /**
     * @param array{
     *     investigationId: string,
     *     actionType: 'Evidence'|'Investigation'|'Summarization',
     *     title: string,
     *     content: string,
     *     status: 'Pending'|'InProgress'|'Waiting'|'Completed'|'Failed'|'Cancelled',
     *     lastUpdated: \Aws\Api\DateTimeResult,
     *     feedback?: InvestigationFeedback|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
