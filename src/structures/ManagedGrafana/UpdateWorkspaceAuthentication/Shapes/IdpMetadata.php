<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\UpdateWorkspaceAuthentication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $url
 * @property string $xml
 */
class IdpMetadata extends Shape
{
    /**
     * @param array{
     *     url?: string,
     *     xml?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
