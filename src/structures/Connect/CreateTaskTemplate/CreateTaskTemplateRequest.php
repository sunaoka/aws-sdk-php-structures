<?php

namespace Sunaoka\Aws\Structures\Connect\CreateTaskTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Name
 * @property string|null $Description
 * @property string|null $ContactFlowId
 * @property string|null $SelfAssignFlowId
 * @property Shapes\TaskTemplateConstraints|null $Constraints
 * @property Shapes\TaskTemplateDefaults|null $Defaults
 * @property 'ACTIVE'|'INACTIVE'|null $Status
 * @property list<Shapes\TaskTemplateField> $Fields
 * @property string|null $ClientToken
 */
class CreateTaskTemplateRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Name: string,
     *     Description?: string|null,
     *     ContactFlowId?: string|null,
     *     SelfAssignFlowId?: string|null,
     *     Constraints?: Shapes\TaskTemplateConstraints|null,
     *     Defaults?: Shapes\TaskTemplateDefaults|null,
     *     Status?: 'ACTIVE'|'INACTIVE'|null,
     *     Fields: list<Shapes\TaskTemplateField>,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
