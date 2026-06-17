<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdatePrivateConnectionCertificate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property 'SERVICE_MANAGED'|'SELF_MANAGED' $type
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED' $status
 * @property string|null $resourceGatewayId
 * @property string|null $hostAddress
 * @property string|null $vpcId
 * @property string|null $resourceConfigurationId
 * @property \Aws\Api\DateTimeResult|null $certificateExpiryTime
 * @property 'PUBLIC'|'IN_VPC'|null $dnsResolution
 * @property string|null $failureMessage
 * @property array<string, string>|null $tags
 */
class UpdatePrivateConnectionCertificateResponse extends Response
{
}
