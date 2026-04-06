<?php

namespace Sunaoka\Aws\Structures\Deadline\GetLicenseEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $licenseEndpointId
 * @property 'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'READY'|'NOT_READY' $status
 * @property string $statusMessage
 * @property string|null $vpcId
 * @property string|null $dnsName
 * @property list<string>|null $subnetIds
 * @property list<string>|null $securityGroupIds
 */
class GetLicenseEndpointResponse extends Response
{
}
