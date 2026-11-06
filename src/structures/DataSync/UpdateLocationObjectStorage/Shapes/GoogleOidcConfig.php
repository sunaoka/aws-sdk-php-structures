<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationObjectStorage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProjectName
 * @property string $ProjectNumber
 * @property string $IdentityPoolName
 * @property string $IdentityProviderName
 */
class GoogleOidcConfig extends Shape
{
    /**
     * @param array{
     *     ProjectName: string,
     *     ProjectNumber: string,
     *     IdentityPoolName: string,
     *     IdentityProviderName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
