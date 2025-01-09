<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateRequestValidator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $name
 * @property bool $validateRequestBody
 * @property bool $validateRequestParameters
 */
class CreateRequestValidatorRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     name?: string,
     *     validateRequestBody?: bool,
     *     validateRequestParameters?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
