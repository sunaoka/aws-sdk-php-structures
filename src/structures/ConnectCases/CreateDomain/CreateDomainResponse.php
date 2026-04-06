<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $domainId
 * @property string $domainArn
 * @property 'Active'|'CreationInProgress'|'CreationFailed' $domainStatus
 */
class CreateDomainResponse extends Response
{
}
