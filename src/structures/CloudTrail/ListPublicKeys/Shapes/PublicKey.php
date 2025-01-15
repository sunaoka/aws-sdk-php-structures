<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListPublicKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Psr\Http\Message\StreamInterface|null $Value
 * @property \Aws\Api\DateTimeResult|null $ValidityStartTime
 * @property \Aws\Api\DateTimeResult|null $ValidityEndTime
 * @property string|null $Fingerprint
 */
class PublicKey extends Shape
{
    /**
     * @param array{
     *     Value?: \Psr\Http\Message\StreamInterface|null,
     *     ValidityStartTime?: \Aws\Api\DateTimeResult|null,
     *     ValidityEndTime?: \Aws\Api\DateTimeResult|null,
     *     Fingerprint?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
