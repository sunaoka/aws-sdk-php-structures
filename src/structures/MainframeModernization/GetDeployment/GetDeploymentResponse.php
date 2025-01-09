<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetDeployment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $applicationId
 * @property int<1, max> $applicationVersion
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $deploymentId
 * @property string $environmentId
 * @property 'Deploying'|'Succeeded'|'Failed'|'Updating Deployment' $status
 * @property string $statusReason
 */
class GetDeploymentResponse extends Response
{
}
