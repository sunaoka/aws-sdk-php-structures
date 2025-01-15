<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $meshName
 * @property string|null $meshOwner
 * @property Shapes\VirtualServiceSpec $spec
 * @property list<Shapes\TagRef>|null $tags
 * @property string $virtualServiceName
 */
class CreateVirtualServiceRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     meshName: string,
     *     meshOwner?: string|null,
     *     spec: Shapes\VirtualServiceSpec,
     *     tags?: list<Shapes\TagRef>|null,
     *     virtualServiceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
