<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetService;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property Shapes\DnsEntry|null $dnsEntry
 * @property string|null $customDomainName
 * @property string|null $certificateArn
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null $status
 * @property 'NONE'|'AWS_IAM'|null $authType
 * @property string|null $failureCode
 * @property string|null $failureMessage
 */
class GetServiceResponse extends Response
{
}
