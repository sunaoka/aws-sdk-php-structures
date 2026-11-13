<?php

namespace Sunaoka\Aws\Structures\MWAA\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StartUrl
 * @property string|null $IdentityStoreId
 */
class IdentityCenterConfiguration extends Shape
{
    /**
     * @param array{
     *     StartUrl?: string|null,
     *     IdentityStoreId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
