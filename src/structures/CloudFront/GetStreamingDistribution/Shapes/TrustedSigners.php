<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetStreamingDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property int $Quantity
 * @property list<string>|null $Items
 */
class TrustedSigners extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     Quantity: int,
     *     Items?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
