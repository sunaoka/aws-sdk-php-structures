<?php

namespace Sunaoka\Aws\Structures\Route53Domains\GetDomainDetail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Algorithm
 * @property int $Flags
 * @property string $PublicKey
 * @property int $DigestType
 * @property string $Digest
 * @property int $KeyTag
 * @property string $Id
 */
class DnssecKey extends Shape
{
    /**
     * @param array{
     *     Algorithm?: int,
     *     Flags?: int,
     *     PublicKey?: string,
     *     DigestType?: int,
     *     Digest?: string,
     *     KeyTag?: int,
     *     Id?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
