<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetDataAccessor;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $displayName
 * @property string $dataAccessorId
 * @property string $dataAccessorArn
 * @property string $applicationId
 * @property string $idcApplicationArn
 * @property string $principal
 * @property list<Shapes\ActionConfiguration> $actionConfigurations
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class GetDataAccessorResponse extends Response
{
}
