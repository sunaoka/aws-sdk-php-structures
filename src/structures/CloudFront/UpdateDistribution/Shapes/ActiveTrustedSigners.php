<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property int $Quantity
 * @property list<Signer> $Items
 */
class ActiveTrustedSigners extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     Quantity: int,
     *     Items?: list<Signer>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
