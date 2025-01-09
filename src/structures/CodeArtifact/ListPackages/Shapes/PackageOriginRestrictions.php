<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListPackages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOW'|'BLOCK' $publish
 * @property 'ALLOW'|'BLOCK' $upstream
 */
class PackageOriginRestrictions extends Shape
{
    /**
     * @param array{
     *     publish: 'ALLOW'|'BLOCK',
     *     upstream: 'ALLOW'|'BLOCK'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
