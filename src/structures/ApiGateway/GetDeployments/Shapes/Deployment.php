<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $description
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property array<string, array<string, MethodSnapshot>> $apiSummary
 */
class Deployment extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     description?: string,
     *     createdDate?: \Aws\Api\DateTimeResult,
     *     apiSummary?: array<string, array<string, MethodSnapshot>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
