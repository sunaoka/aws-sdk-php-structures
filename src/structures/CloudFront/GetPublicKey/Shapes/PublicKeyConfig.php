<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetPublicKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CallerReference
 * @property string $Name
 * @property string $EncodedKey
 * @property string|null $Comment
 */
class PublicKeyConfig extends Shape
{
    /**
     * @param array{
     *     CallerReference: string,
     *     Name: string,
     *     EncodedKey: string,
     *     Comment?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
