<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $modelName
 * @property list<Shapes\PatchOperation> $patchOperations
 */
class UpdateModelRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     modelName: string,
     *     patchOperations?: list<Shapes\PatchOperation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
