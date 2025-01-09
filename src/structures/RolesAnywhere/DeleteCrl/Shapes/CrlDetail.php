<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\DeleteCrl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $crlArn
 * @property string $crlData
 * @property string $crlId
 * @property bool $enabled
 * @property string $name
 * @property string $trustAnchorArn
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class CrlDetail extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     crlArn?: string,
     *     crlData?: string,
     *     crlId?: string,
     *     enabled?: bool,
     *     name?: string,
     *     trustAnchorArn?: string,
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
