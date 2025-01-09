<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateRestApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property list<Shapes\PatchOperation> $patchOperations
 */
class UpdateRestApiRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     patchOperations?: list<Shapes\PatchOperation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
