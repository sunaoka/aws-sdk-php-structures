<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $meshName
 * @property string $meshOwner
 * @property Shapes\VirtualServiceSpec $spec
 * @property list<Shapes\TagRef> $tags
 * @property string $virtualServiceName
 */
class CreateVirtualServiceRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     meshName: string,
     *     meshOwner?: string,
     *     spec: Shapes\VirtualServiceSpec,
     *     tags?: list<Shapes\TagRef>,
     *     virtualServiceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
