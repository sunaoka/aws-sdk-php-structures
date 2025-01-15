<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateStreamingDistributionWithTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property int $Quantity
 * @property list<Signer>|null $Items
 */
class ActiveTrustedSigners extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     Quantity: int,
     *     Items?: list<Signer>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
