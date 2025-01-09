<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteMesh;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $meshName
 */
class DeleteMeshRequest extends Request
{
    /**
     * @param array{meshName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
