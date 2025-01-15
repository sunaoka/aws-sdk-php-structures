<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetRequestValidators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property bool|null $validateRequestBody
 * @property bool|null $validateRequestParameters
 */
class RequestValidator extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     validateRequestBody?: bool|null,
     *     validateRequestParameters?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
