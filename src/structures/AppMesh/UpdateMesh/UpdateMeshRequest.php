<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateMesh;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $meshName
 * @property Shapes\MeshSpec $spec
 */
class UpdateMeshRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     meshName: string,
     *     spec?: Shapes\MeshSpec
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
