<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetDataAccessor;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $displayName
 * @property string|null $dataAccessorId
 * @property string|null $dataAccessorArn
 * @property string|null $applicationId
 * @property string|null $idcApplicationArn
 * @property string|null $principal
 * @property list<Shapes\ActionConfiguration>|null $actionConfigurations
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class GetDataAccessorResponse extends Response
{
}
