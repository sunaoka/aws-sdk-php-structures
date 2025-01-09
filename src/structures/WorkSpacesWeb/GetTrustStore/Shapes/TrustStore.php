<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetTrustStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $associatedPortalArns
 * @property string $trustStoreArn
 */
class TrustStore extends Shape
{
    /**
     * @param array{
     *     associatedPortalArns?: list<string>,
     *     trustStoreArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
