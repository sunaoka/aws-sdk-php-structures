<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateFirewallDomains;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Id
 * @property string $Name
 * @property 'COMPLETE'|'COMPLETE_IMPORT_FAILED'|'IMPORTING'|'DELETING'|'UPDATING' $Status
 * @property string $StatusMessage
 */
class UpdateFirewallDomainsResponse extends Response
{
}
