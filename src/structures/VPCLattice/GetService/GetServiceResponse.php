<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetService;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property 'NONE'|'AWS_IAM'|null $authType
 * @property string|null $certificateArn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $customDomainName
 * @property Shapes\DnsEntry|null $dnsEntry
 * @property string|null $failureCode
 * @property string|null $failureMessage
 * @property string|null $id
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $name
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null $status
 */
class GetServiceResponse extends Response
{
}
