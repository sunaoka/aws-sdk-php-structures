<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateTaskTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TaskTemplateId
 * @property string $InstanceId
 * @property string $Name
 * @property string $Description
 * @property string $ContactFlowId
 * @property string $SelfAssignFlowId
 * @property Shapes\TaskTemplateConstraints $Constraints
 * @property Shapes\TaskTemplateDefaults $Defaults
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property list<Shapes\TaskTemplateField> $Fields
 */
class UpdateTaskTemplateRequest extends Request
{
    /**
     * @param array{
     *     TaskTemplateId: string,
     *     InstanceId: string,
     *     Name?: string,
     *     Description?: string,
     *     ContactFlowId?: string,
     *     SelfAssignFlowId?: string,
     *     Constraints?: Shapes\TaskTemplateConstraints,
     *     Defaults?: Shapes\TaskTemplateDefaults,
     *     Status?: 'ACTIVE'|'INACTIVE',
     *     Fields?: list<Shapes\TaskTemplateField>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
