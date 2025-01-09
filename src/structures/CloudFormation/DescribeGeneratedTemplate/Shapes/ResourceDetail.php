<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeGeneratedTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceType
 * @property string $LogicalResourceId
 * @property array<string, string> $ResourceIdentifier
 * @property 'PENDING'|'IN_PROGRESS'|'FAILED'|'COMPLETE' $ResourceStatus
 * @property string $ResourceStatusReason
 * @property list<WarningDetail> $Warnings
 */
class ResourceDetail extends Shape
{
    /**
     * @param array{
     *     ResourceType?: string,
     *     LogicalResourceId?: string,
     *     ResourceIdentifier?: array<string, string>,
     *     ResourceStatus?: 'PENDING'|'IN_PROGRESS'|'FAILED'|'COMPLETE',
     *     ResourceStatusReason?: string,
     *     Warnings?: list<WarningDetail>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
