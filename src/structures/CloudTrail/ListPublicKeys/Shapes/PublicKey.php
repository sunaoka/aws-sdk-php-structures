<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListPublicKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property \Aws\Api\DateTimeResult $ValidityStartTime
 * @property \Aws\Api\DateTimeResult $ValidityEndTime
 * @property string $Fingerprint
 */
class PublicKey extends Shape
{
    /**
     * @param array{
     *     Value?: string,
     *     ValidityStartTime?: \Aws\Api\DateTimeResult,
     *     ValidityEndTime?: \Aws\Api\DateTimeResult,
     *     Fingerprint?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
