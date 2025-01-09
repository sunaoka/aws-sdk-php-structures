<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateStage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $stageName
 * @property list<Shapes\PatchOperation> $patchOperations
 */
class UpdateStageRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     stageName: string,
     *     patchOperations?: list<Shapes\PatchOperation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
