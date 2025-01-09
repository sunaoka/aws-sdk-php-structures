<?php

namespace Sunaoka\Aws\Structures\AppRunner\DescribeCustomDomains;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DNSTarget
 * @property string $ServiceArn
 * @property list<Shapes\CustomDomain> $CustomDomains
 * @property list<Shapes\VpcDNSTarget> $VpcDNSTargets
 * @property string $NextToken
 */
class DescribeCustomDomainsResponse extends Response
{
}
