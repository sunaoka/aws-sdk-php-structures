<?php

namespace Sunaoka\Aws\Structures\IdentityStore\CreateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Formatted
 * @property string $FamilyName
 * @property string $GivenName
 * @property string $MiddleName
 * @property string $HonorificPrefix
 * @property string $HonorificSuffix
 */
class Name extends Shape
{
    /**
     * @param array{
     *     Formatted?: string,
     *     FamilyName?: string,
     *     GivenName?: string,
     *     MiddleName?: string,
     *     HonorificPrefix?: string,
     *     HonorificSuffix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
