<?php

namespace Sunaoka\Aws\Structures\MarketplaceEntitlementService\GetEntitlements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProductCode
 * @property array<'CUSTOMER_IDENTIFIER'|'DIMENSION'|'CUSTOMER_AWS_ACCOUNT_ID'|'LICENSE_ARN', list<string>>|null $Filter
 * @property string|null $NextToken
 * @property int<1, 25>|null $MaxResults
 */
class GetEntitlementsRequest extends Request
{
    /**
     * @param array{
     *     ProductCode: string,
     *     Filter?: array<'CUSTOMER_IDENTIFIER'|'DIMENSION'|'CUSTOMER_AWS_ACCOUNT_ID'|'LICENSE_ARN', list<string>>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 25>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
