<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeChangeSetHooks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LogicalResourceId
 * @property string|null $ResourceType
 * @property 'Add'|'Modify'|'Remove'|'Import'|'Dynamic'|'SyncWithActual'|null $ResourceAction
 */
class ChangeSetHookResourceTargetDetails extends Shape
{
    /**
     * @param array{
     *     LogicalResourceId?: string|null,
     *     ResourceType?: string|null,
     *     ResourceAction?: 'Add'|'Modify'|'Remove'|'Import'|'Dynamic'|'SyncWithActual'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
