<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectAcl;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Owner $Owner
 * @property list<Shapes\Grant> $Grants
 * @property 'requester' $RequestCharged
 */
class GetObjectAclResponse extends Response
{
}
