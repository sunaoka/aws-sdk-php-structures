<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactFlowAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactFlowId
 * @property string $AliasId
 */
class DescribeContactFlowAliasRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactFlowId: string,
     *     AliasId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
