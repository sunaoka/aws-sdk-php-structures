<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactFlowAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContactFlowId
 * @property string|null $ContactFlowArn
 * @property string|null $AliasId
 * @property int<1, max>|null $Version
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $LastModifiedRegion
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class ContactFlowAliasInfo extends Shape
{
    /**
     * @param array{
     *     ContactFlowId?: string|null,
     *     ContactFlowArn?: string|null,
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
