<?php

namespace Sunaoka\Aws\Structures\Kms\ListAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AliasName
 * @property string|null $AliasArn
 * @property string|null $TargetKeyId
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedDate
 */
class AliasListEntry extends Shape
{
    /**
     * @param array{
     *     AliasName?: string|null,
     *     AliasArn?: string|null,
     *     TargetKeyId?: string|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
