<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\DisableCrl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $crlId
 * @property string|null $crlArn
 * @property string|null $name
 * @property bool|null $enabled
 * @property \Psr\Http\Message\StreamInterface|null $crlData
 * @property string|null $trustAnchorArn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class CrlDetail extends Shape
{
    /**
     * @param array{
     *     crlId?: string|null,
     *     crlArn?: string|null,
     *     name?: string|null,
     *     enabled?: bool|null,
     *     crlData?: \Psr\Http\Message\StreamInterface|null,
     *     trustAnchorArn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
