<?php

namespace Sunaoka\Aws\Structures\Connect\CreateContactFlowAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $Description
 * @property string $ContactFlowId
 * @property int<1, max> $ContactFlowVersion
 * @property string $AliasName
 */
class CreateContactFlowAliasRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Description?: string|null,
     *     ContactFlowId: string,
     *     ContactFlowVersion: int<1, max>,
     *     AliasName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
