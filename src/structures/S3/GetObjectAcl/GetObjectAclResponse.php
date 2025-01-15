<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectAcl;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Owner|null $Owner
 * @property list<Shapes\Grant>|null $Grants
 * @property 'requester'|null $RequestCharged
 */
class GetObjectAclResponse extends Response
{
}
