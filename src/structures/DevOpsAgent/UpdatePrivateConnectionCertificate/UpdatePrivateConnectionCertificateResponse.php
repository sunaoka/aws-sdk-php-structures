<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdatePrivateConnectionCertificate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property 'SELF_MANAGED'|'SERVICE_MANAGED' $type
 * @property string|null $resourceGatewayId
 * @property string|null $hostAddress
 * @property string|null $vpcId
 * @property string|null $resourceConfigurationId
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED' $status
 * @property \Aws\Api\DateTimeResult|null $certificateExpiryTime
 */
class UpdatePrivateConnectionCertificateResponse extends Response
{
}
