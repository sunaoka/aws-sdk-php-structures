<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $Name
 * @property string|null $Description
 * @property Shapes\SensitiveDocument $FlowDefinition
 * @property list<Shapes\Permission>|null $Permissions
 * @property string|null $ClientToken
 */
class CreateFlowRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Name: string,
     *     Description?: string|null,
     *     FlowDefinition: Shapes\SensitiveDocument,
     *     Permissions?: list<Shapes\Permission>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
