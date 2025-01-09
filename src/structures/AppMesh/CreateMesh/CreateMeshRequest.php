<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateMesh;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $meshName
 * @property Shapes\MeshSpec $spec
 * @property list<Shapes\TagRef> $tags
 */
class CreateMeshRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     meshName: string,
     *     spec?: Shapes\MeshSpec,
     *     tags?: list<Shapes\TagRef>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
