<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateRequestValidator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string|null $name
 * @property bool|null $validateRequestBody
 * @property bool|null $validateRequestParameters
 */
class CreateRequestValidatorRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     name?: string|null,
     *     validateRequestBody?: bool|null,
     *     validateRequestParameters?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
