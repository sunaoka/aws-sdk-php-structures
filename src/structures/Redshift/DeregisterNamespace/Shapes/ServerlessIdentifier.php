<?php

namespace Sunaoka\Aws\Structures\Redshift\DeregisterNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NamespaceIdentifier
 * @property string $WorkgroupIdentifier
 */
class ServerlessIdentifier extends Shape
{
    /**
     * @param array{
     *     NamespaceIdentifier: string,
     *     WorkgroupIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
