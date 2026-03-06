<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\DeleteDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $domainId
 * @property string $arn
 * @property 'ACTIVE'|'DELETING'|'DELETED' $status
 */
class DeleteDomainResponse extends Response
{
}
