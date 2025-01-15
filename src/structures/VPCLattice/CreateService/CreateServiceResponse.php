<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateService;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property 'NONE'|'AWS_IAM'|null $authType
 * @property string|null $certificateArn
 * @property string|null $customDomainName
 * @property Shapes\DnsEntry|null $dnsEntry
 * @property string|null $id
 * @property string|null $name
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null $status
 */
class CreateServiceResponse extends Response
{
}
