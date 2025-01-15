<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateMesh;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $meshName
 * @property Shapes\MeshSpec|null $spec
 * @property list<Shapes\TagRef>|null $tags
 */
class CreateMeshRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     meshName: string,
     *     spec?: Shapes\MeshSpec|null,
     *     tags?: list<Shapes\TagRef>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
