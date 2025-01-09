<?php

namespace Sunaoka\Aws\Structures\IdentityStore\GetGroupId\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Issuer
 * @property string $Id
 */
class ExternalId extends Shape
{
    /**
     * @param array{
     *     Issuer: string,
     *     Id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
