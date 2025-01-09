<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeMesh;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $meshName
 * @property string $meshOwner
 */
class DescribeMeshRequest extends Request
{
    /**
     * @param array{
     *     meshName: string,
     *     meshOwner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
