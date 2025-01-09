<?php

namespace Sunaoka\Aws\Structures\Route53Domains\AssociateDelegationSignerToDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Algorithm
 * @property int $Flags
 * @property string $PublicKey
 */
class DnssecSigningAttributes extends Shape
{
    /**
     * @param array{
     *     Algorithm?: int,
     *     Flags?: int,
     *     PublicKey?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
