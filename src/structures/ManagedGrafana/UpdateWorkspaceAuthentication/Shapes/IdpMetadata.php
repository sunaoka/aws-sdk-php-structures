<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\UpdateWorkspaceAuthentication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $url
 * @property string|null $xml
 */
class IdpMetadata extends Shape
{
    /**
     * @param array{
     *     url?: string|null,
     *     xml?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
