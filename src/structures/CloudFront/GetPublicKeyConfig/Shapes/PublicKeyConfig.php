<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetPublicKeyConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CallerReference
 * @property string $Name
 * @property string $EncodedKey
 * @property string $Comment
 */
class PublicKeyConfig extends Shape
{
    /**
     * @param array{
     *     CallerReference: string,
     *     Name: string,
     *     EncodedKey: string,
     *     Comment?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
