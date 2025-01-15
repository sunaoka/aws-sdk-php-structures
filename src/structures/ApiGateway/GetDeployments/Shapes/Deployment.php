<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $createdDate
 * @property array<string, array<string, MethodSnapshot>>|null $apiSummary
 */
class Deployment extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     description?: string|null,
     *     createdDate?: \Aws\Api\DateTimeResult|null,
     *     apiSummary?: array<string, array<string, MethodSnapshot>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
