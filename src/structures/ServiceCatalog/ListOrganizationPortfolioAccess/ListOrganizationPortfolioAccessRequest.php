<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListOrganizationPortfolioAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $PortfolioId
 * @property 'ORGANIZATION'|'ORGANIZATIONAL_UNIT'|'ACCOUNT' $OrganizationNodeType
 * @property string|null $PageToken
 * @property int<0, 20>|null $PageSize
 */
class ListOrganizationPortfolioAccessRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     PortfolioId: string,
     *     OrganizationNodeType: 'ORGANIZATION'|'ORGANIZATIONAL_UNIT'|'ACCOUNT',
     *     PageToken?: string|null,
     *     PageSize?: int<0, 20>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
