<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateTaskTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TaskTemplateId
 * @property string $InstanceId
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $ContactFlowId
 * @property string|null $SelfAssignFlowId
 * @property Shapes\TaskTemplateConstraints|null $Constraints
 * @property Shapes\TaskTemplateDefaults|null $Defaults
 * @property 'ACTIVE'|'INACTIVE'|null $Status
 * @property list<Shapes\TaskTemplateField>|null $Fields
 */
class UpdateTaskTemplateRequest extends Request
{
    /**
     * @param array{
     *     TaskTemplateId: string,
     *     InstanceId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     ContactFlowId?: string|null,
     *     SelfAssignFlowId?: string|null,
     *     Constraints?: Shapes\TaskTemplateConstraints|null,
     *     Defaults?: Shapes\TaskTemplateDefaults|null,
     *     Status?: 'ACTIVE'|'INACTIVE'|null,
     *     Fields?: list<Shapes\TaskTemplateField>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
