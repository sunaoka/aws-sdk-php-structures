<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateService;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $customDomainName
 * @property string|null $certificateArn
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null $status
 * @property 'NONE'|'AWS_IAM'|null $authType
 * @property Shapes\DnsEntry|null $dnsEntry
 */
class CreateServiceResponse extends Response
{
}
