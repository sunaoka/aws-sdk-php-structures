<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AwsAccountNumber
 * @property KeyPairIds|null $KeyPairIds
 */
class Signer extends Shape
{
    /**
     * @param array{
     *     AwsAccountNumber?: string|null,
     *     KeyPairIds?: KeyPairIds|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
