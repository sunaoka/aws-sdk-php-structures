<?php

namespace Sunaoka\Aws\Structures\MarketplaceEntitlementService\GetEntitlements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProductCode
 * @property array<'CUSTOMER_IDENTIFIER'|'DIMENSION', list<string>> $Filter
 * @property string $NextToken
 * @property int<1, 25> $MaxResults
 */
class GetEntitlementsRequest extends Request
{
    /**
     * @param array{
     *     ProductCode: string,
     *     Filter?: array<'CUSTOMER_IDENTIFIER'|'DIMENSION', list<string>>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 25>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
