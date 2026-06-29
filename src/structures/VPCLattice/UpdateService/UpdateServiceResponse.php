<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateService;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $customDomainName
 * @property string|null $certificateArn
 * @property 'NONE'|'AWS_IAM'|null $authType
 * @property int<60, 600>|null $idleTimeoutSeconds
 */
class UpdateServiceResponse extends Response
{
}
