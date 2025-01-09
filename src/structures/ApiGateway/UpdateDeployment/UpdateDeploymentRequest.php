<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $deploymentId
 * @property list<Shapes\PatchOperation> $patchOperations
 */
class UpdateDeploymentRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     deploymentId: string,
     *     patchOperations?: list<Shapes\PatchOperation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
