<?php

namespace Sunaoka\Aws\Structures\Connect\CreateTaskTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Name
 * @property string $Description
 * @property string $ContactFlowId
 * @property string $SelfAssignFlowId
 * @property Shapes\TaskTemplateConstraints $Constraints
 * @property Shapes\TaskTemplateDefaults $Defaults
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property list<Shapes\TaskTemplateField> $Fields
 * @property string $ClientToken
 */
class CreateTaskTemplateRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Name: string,
     *     Description?: string,
     *     ContactFlowId?: string,
     *     SelfAssignFlowId?: string,
     *     Constraints?: Shapes\TaskTemplateConstraints,
     *     Defaults?: Shapes\TaskTemplateDefaults,
     *     Status?: 'ACTIVE'|'INACTIVE',
     *     Fields: list<Shapes\TaskTemplateField>,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
