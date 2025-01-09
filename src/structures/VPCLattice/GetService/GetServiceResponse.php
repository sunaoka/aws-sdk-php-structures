<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetService;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property 'NONE'|'AWS_IAM' $authType
 * @property string $certificateArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $customDomainName
 * @property Shapes\DnsEntry $dnsEntry
 * @property string $failureCode
 * @property string $failureMessage
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $name
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED' $status
 */
class GetServiceResponse extends Response
{
}
