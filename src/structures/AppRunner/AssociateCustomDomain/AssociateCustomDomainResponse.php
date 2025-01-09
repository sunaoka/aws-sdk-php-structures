<?php

namespace Sunaoka\Aws\Structures\AppRunner\AssociateCustomDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DNSTarget
 * @property string $ServiceArn
 * @property Shapes\CustomDomain $CustomDomain
 * @property list<Shapes\VpcDNSTarget> $VpcDNSTargets
 */
class AssociateCustomDomainResponse extends Response
{
}
