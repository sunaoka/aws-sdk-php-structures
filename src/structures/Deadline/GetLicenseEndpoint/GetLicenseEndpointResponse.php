<?php

namespace Sunaoka\Aws\Structures\Deadline\GetLicenseEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $licenseEndpointId
 * @property 'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'READY'|'NOT_READY' $status
 * @property string $statusMessage
 * @property string $vpcId
 * @property string $dnsName
 * @property list<string> $subnetIds
 * @property list<string> $securityGroupIds
 */
class GetLicenseEndpointResponse extends Response
{
}
