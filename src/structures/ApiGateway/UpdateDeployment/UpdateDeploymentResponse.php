<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateDeployment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $createdDate
 * @property array<string, array<string, Shapes\MethodSnapshot>>|null $apiSummary
 */
class UpdateDeploymentResponse extends Response
{
}
