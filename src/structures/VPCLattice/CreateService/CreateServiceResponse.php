<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateService;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property 'NONE'|'AWS_IAM' $authType
 * @property string $certificateArn
 * @property string $customDomainName
 * @property Shapes\DnsEntry $dnsEntry
 * @property string $id
 * @property string $name
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED' $status
 */
class CreateServiceResponse extends Response
{
}
