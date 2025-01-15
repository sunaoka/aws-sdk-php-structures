<?php

namespace Sunaoka\Aws\Structures\IdentityStore\CreateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Formatted
 * @property string|null $FamilyName
 * @property string|null $GivenName
 * @property string|null $MiddleName
 * @property string|null $HonorificPrefix
 * @property string|null $HonorificSuffix
 */
class Name extends Shape
{
    /**
     * @param array{
     *     Formatted?: string|null,
     *     FamilyName?: string|null,
     *     GivenName?: string|null,
     *     MiddleName?: string|null,
     *     HonorificPrefix?: string|null,
     *     HonorificSuffix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
