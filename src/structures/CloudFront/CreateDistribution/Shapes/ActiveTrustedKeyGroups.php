<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property int $Quantity
 * @property list<KGKeyPairIds> $Items
 */
class ActiveTrustedKeyGroups extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     Quantity: int,
     *     Items?: list<KGKeyPairIds>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
