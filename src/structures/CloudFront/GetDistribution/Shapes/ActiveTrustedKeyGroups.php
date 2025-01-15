<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property int $Quantity
 * @property list<KGKeyPairIds>|null $Items
 */
class ActiveTrustedKeyGroups extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     Quantity: int,
     *     Items?: list<KGKeyPairIds>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
