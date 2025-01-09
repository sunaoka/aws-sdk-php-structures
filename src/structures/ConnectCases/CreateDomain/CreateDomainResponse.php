<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $domainArn
 * @property string $domainId
 * @property 'Active'|'CreationInProgress'|'CreationFailed' $domainStatus
 */
class CreateDomainResponse extends Response
{
}
