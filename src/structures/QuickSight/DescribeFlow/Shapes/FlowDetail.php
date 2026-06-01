<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $FlowId
 * @property string $Name
 * @property string|null $Description
 * @property 'PUBLISHED'|'DRAFT'|'PENDING_APPROVAL' $PublishState
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property string|null $LastUpdatedBy
 * @property SensitiveDocument $FlowDefinition
 * @property list<StepAliasMapping>|null $StepAliases
 */
class FlowDetail extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     FlowId: string,
     *     Name: string,
     *     Description?: string|null,
     *     PublishState: 'PUBLISHED'|'DRAFT'|'PENDING_APPROVAL',
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     CreatedBy?: string|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedBy?: string|null,
     *     FlowDefinition: SensitiveDocument,
     *     StepAliases?: list<StepAliasMapping>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
