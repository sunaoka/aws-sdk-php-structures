<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdatePublicKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property PublicKeyConfig $PublicKeyConfig
 */
class PublicKey extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     PublicKeyConfig: PublicKeyConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
