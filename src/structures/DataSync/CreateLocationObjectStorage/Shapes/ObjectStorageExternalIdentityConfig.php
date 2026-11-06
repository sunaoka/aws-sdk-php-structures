<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationObjectStorage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GoogleOidcConfig|null $GoogleOidc
 */
class ObjectStorageExternalIdentityConfig extends Shape
{
    /**
     * @param array{GoogleOidc?: GoogleOidcConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
