<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetDeployment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $createdDate
 * @property array<string, array<string, Shapes\MethodSnapshot>>|null $apiSummary
 */
class GetDeploymentResponse extends Response
{
}
