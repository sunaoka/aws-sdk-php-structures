<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateMesh;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $meshName
 * @property Shapes\MeshSpec|null $spec
 */
class UpdateMeshRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     meshName: string,
     *     spec?: Shapes\MeshSpec|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
