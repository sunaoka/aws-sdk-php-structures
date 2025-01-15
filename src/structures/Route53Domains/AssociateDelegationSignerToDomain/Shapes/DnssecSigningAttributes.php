<?php

namespace Sunaoka\Aws\Structures\Route53Domains\AssociateDelegationSignerToDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Algorithm
 * @property int|null $Flags
 * @property string|null $PublicKey
 */
class DnssecSigningAttributes extends Shape
{
    /**
     * @param array{
     *     Algorithm?: int|null,
     *     Flags?: int|null,
     *     PublicKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
