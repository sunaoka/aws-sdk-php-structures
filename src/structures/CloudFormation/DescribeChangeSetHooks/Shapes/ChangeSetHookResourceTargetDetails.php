<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeChangeSetHooks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LogicalResourceId
 * @property string $ResourceType
 * @property 'Add'|'Modify'|'Remove'|'Import'|'Dynamic' $ResourceAction
 */
class ChangeSetHookResourceTargetDetails extends Shape
{
    /**
     * @param array{
     *     LogicalResourceId?: string,
     *     ResourceType?: string,
     *     ResourceAction?: 'Add'|'Modify'|'Remove'|'Import'|'Dynamic'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
