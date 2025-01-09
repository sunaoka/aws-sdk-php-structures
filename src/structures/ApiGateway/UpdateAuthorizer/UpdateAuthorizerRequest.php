<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateAuthorizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $authorizerId
 * @property list<Shapes\PatchOperation> $patchOperations
 */
class UpdateAuthorizerRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     authorizerId: string,
     *     patchOperations?: list<Shapes\PatchOperation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
