<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeMesh;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $meshName
 * @property string|null $meshOwner
 */
class DescribeMeshRequest extends Request
{
    /**
     * @param array{
     *     meshName: string,
     *     meshOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
