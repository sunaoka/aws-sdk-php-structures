<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<'SSLv3'|'TLSv1'|'TLSv1.1'|'TLSv1.2'> $Items
 */
class OriginSslProtocols extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items: list<'SSLv3'|'TLSv1'|'TLSv1.1'|'TLSv1.2'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
