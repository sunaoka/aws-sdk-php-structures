<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetTrustStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $associatedPortalArns
 * @property string $trustStoreArn
 */
class TrustStore extends Shape
{
    /**
     * @param array{
     *     associatedPortalArns?: list<string>|null,
     *     trustStoreArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
