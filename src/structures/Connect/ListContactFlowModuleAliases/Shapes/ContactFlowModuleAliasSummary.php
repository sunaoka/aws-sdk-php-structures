<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactFlowModuleAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $AliasId
 * @property int<1, max>|null $Version
 * @property string|null $AliasName
 * @property string|null $AliasDescription
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class ContactFlowModuleAliasSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     AliasId?: string|null,
     *     Version?: int<1, max>|null,
     *     AliasName?: string|null,
     *     AliasDescription?: string|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
