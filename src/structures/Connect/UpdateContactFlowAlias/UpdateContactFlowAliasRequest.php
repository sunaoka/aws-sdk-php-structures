<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactFlowAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactFlowId
 * @property string $AliasId
 * @property string|null $Name
 * @property string|null $Description
 * @property int<1, max>|null $ContactFlowVersion
 */
class UpdateContactFlowAliasRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactFlowId: string,
     *     AliasId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     ContactFlowVersion?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
