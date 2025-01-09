<?php

namespace Sunaoka\Aws\Structures\Kms\ListAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AliasName
 * @property string $AliasArn
 * @property string $TargetKeyId
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $LastUpdatedDate
 */
class AliasListEntry extends Shape
{
    /**
     * @param array{
     *     AliasName?: string,
     *     AliasArn?: string,
     *     TargetKeyId?: string,
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     LastUpdatedDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
