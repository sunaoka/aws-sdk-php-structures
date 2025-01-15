<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $meshName
 * @property string|null $meshOwner
 * @property string $virtualServiceName
 */
class DeleteVirtualServiceRequest extends Request
{
    /**
     * @param array{
     *     meshName: string,
     *     meshOwner?: string|null,
     *     virtualServiceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
