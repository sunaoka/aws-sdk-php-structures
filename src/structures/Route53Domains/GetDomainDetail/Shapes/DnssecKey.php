<?php

namespace Sunaoka\Aws\Structures\Route53Domains\GetDomainDetail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Algorithm
 * @property int|null $Flags
 * @property string|null $PublicKey
 * @property int|null $DigestType
 * @property string|null $Digest
 * @property int|null $KeyTag
 * @property string|null $Id
 */
class DnssecKey extends Shape
{
    /**
     * @param array{
     *     Algorithm?: int|null,
     *     Flags?: int|null,
     *     PublicKey?: string|null,
     *     DigestType?: int|null,
     *     Digest?: string|null,
     *     KeyTag?: int|null,
     *     Id?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
