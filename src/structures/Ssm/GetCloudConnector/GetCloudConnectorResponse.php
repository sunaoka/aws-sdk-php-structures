<?php

namespace Sunaoka\Aws\Structures\Ssm\GetCloudConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $CloudConnectorArn
 * @property string|null $DisplayName
 * @property string|null $Description
 * @property string|null $RoleArn
 * @property Shapes\CloudConnectorConfiguration|null $Configuration
 * @property string|null $ConfigConnectorArn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class GetCloudConnectorResponse extends Response
{
}
