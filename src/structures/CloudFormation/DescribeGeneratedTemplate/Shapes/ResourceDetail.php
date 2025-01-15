<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeGeneratedTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceType
 * @property string|null $LogicalResourceId
 * @property array<string, string>|null $ResourceIdentifier
 * @property 'PENDING'|'IN_PROGRESS'|'FAILED'|'COMPLETE'|null $ResourceStatus
 * @property string|null $ResourceStatusReason
 * @property list<WarningDetail>|null $Warnings
 */
class ResourceDetail extends Shape
{
    /**
     * @param array{
     *     ResourceType?: string|null,
     *     LogicalResourceId?: string|null,
     *     ResourceIdentifier?: array<string, string>|null,
     *     ResourceStatus?: 'PENDING'|'IN_PROGRESS'|'FAILED'|'COMPLETE'|null,
     *     ResourceStatusReason?: string|null,
     *     Warnings?: list<WarningDetail>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
