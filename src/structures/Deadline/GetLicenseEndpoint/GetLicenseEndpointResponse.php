<?php

namespace Sunaoka\Aws\Structures\Deadline\GetLicenseEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $dnsName
 * @property string $licenseEndpointId
 * @property list<string>|null $securityGroupIds
 * @property 'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'READY'|'NOT_READY' $status
 * @property string $statusMessage
 * @property list<string>|null $subnetIds
 * @property string|null $vpcId
 */
class GetLicenseEndpointResponse extends Response
{
}
