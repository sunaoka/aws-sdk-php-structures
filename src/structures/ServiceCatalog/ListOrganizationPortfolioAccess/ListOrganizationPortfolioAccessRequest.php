<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListOrganizationPortfolioAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $PortfolioId
 * @property 'ORGANIZATION'|'ORGANIZATIONAL_UNIT'|'ACCOUNT' $OrganizationNodeType
 * @property string $PageToken
 * @property int $PageSize
 */
class ListOrganizationPortfolioAccessRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     PortfolioId: string,
     *     OrganizationNodeType: 'ORGANIZATION'|'ORGANIZATIONAL_UNIT'|'ACCOUNT',
     *     PageToken?: string,
     *     PageSize?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
