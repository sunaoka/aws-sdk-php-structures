<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateStreamingDistributionWithTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AwsAccountNumber
 * @property KeyPairIds $KeyPairIds
 */
class Signer extends Shape
{
    /**
     * @param array{
     *     AwsAccountNumber?: string,
     *     KeyPairIds?: KeyPairIds
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
