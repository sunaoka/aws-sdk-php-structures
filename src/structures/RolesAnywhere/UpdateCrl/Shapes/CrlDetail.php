<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\UpdateCrl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $crlArn
 * @property \Psr\Http\Message\StreamInterface|null $crlData
 * @property string|null $crlId
 * @property bool|null $enabled
 * @property string|null $name
 * @property string|null $trustAnchorArn
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class CrlDetail extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     crlArn?: string|null,
     *     crlData?: \Psr\Http\Message\StreamInterface|null,
     *     crlId?: string|null,
     *     enabled?: bool|null,
     *     name?: string|null,
     *     trustAnchorArn?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
