<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetRequestValidators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property bool $validateRequestBody
 * @property bool $validateRequestParameters
 */
class RequestValidator extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string,
     *     validateRequestBody?: bool,
     *     validateRequestParameters?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
