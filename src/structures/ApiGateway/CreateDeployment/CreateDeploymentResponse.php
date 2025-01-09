<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateDeployment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $description
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property array<string, array<string, Shapes\MethodSnapshot>> $apiSummary
 */
class CreateDeploymentResponse extends Response
{
}
