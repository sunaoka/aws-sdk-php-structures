<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetTrustStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $associatedPortalArns
 * @property string|null $trustStoreArn
 */
class TrustStore extends Shape
{
    /**
     * @param array{
     *     associatedPortalArns?: list<string>|null,
     *     trustStoreArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
