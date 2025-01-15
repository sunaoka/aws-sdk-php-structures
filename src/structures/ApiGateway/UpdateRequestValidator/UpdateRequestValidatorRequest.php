<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateRequestValidator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $requestValidatorId
 * @property list<Shapes\PatchOperation>|null $patchOperations
 */
class UpdateRequestValidatorRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     requestValidatorId: string,
     *     patchOperations?: list<Shapes\PatchOperation>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
