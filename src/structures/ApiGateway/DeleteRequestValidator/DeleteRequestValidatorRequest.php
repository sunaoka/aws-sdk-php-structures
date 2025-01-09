<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteRequestValidator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $requestValidatorId
 */
class DeleteRequestValidatorRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     requestValidatorId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
