<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $resourceId
 * @property list<Shapes\PatchOperation>|null $patchOperations
 */
class UpdateResourceRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     resourceId: string,
     *     patchOperations?: list<Shapes\PatchOperation>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
