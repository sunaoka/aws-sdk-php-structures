<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListPublicKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $EncodedKey
 * @property string $Comment
 */
class PublicKeySummary extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Name: string,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     EncodedKey: string,
     *     Comment?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
