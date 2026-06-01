<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $FlowId
 * @property string|null $Name
 * @property string|null $Description
 * @property Shapes\SensitiveDocument|null $FlowDefinition
 * @property string|null $ClientToken
 */
class UpdateFlowRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     FlowId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     FlowDefinition?: Shapes\SensitiveDocument|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
