<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactFlowModuleAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContactFlowModuleId
 * @property string|null $ContactFlowModuleArn
 * @property string|null $AliasId
 * @property int<1, max>|null $Version
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $LastModifiedRegion
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class ContactFlowModuleAliasInfo extends Shape
{
    /**
     * @param array{
     *     ContactFlowModuleId?: string|null,
     *     ContactFlowModuleArn?: string|null,
     *     AliasId?: string|null,
     *     Version?: int<1, max>|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     LastModifiedRegion?: string|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
