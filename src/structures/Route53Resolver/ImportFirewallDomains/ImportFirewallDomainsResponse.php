<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ImportFirewallDomains;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property 'COMPLETE'|'COMPLETE_IMPORT_FAILED'|'IMPORTING'|'DELETING'|'UPDATING'|null $Status
 * @property string|null $StatusMessage
 */
class ImportFirewallDomainsResponse extends Response
{
}
