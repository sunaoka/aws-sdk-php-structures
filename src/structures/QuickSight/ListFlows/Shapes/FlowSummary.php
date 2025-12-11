<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $FlowId
 * @property string $Name
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property string|null $LastUpdatedBy
 * @property 'PUBLISHED'|'DRAFT'|'PENDING_APPROVAL'|null $PublishState
 * @property int|null $RunCount
 * @property int|null $UserCount
 * @property string|null $LastPublishedBy
 * @property \Aws\Api\DateTimeResult|null $LastPublishedAt
 */
class FlowSummary extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     FlowId: string,
     *     Name: string,
     *     Description?: string|null,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     CreatedBy?: string|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedBy?: string|null,
     *     PublishState?: 'PUBLISHED'|'DRAFT'|'PENDING_APPROVAL'|null,
     *     RunCount?: int|null,
     *     UserCount?: int|null,
     *     LastPublishedBy?: string|null,
     *     LastPublishedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
