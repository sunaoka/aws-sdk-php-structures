<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListPortfolioAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $PortfolioId
 * @property string|null $OrganizationParentId
 * @property string|null $PageToken
 * @property int<0, 100>|null $PageSize
 */
class ListPortfolioAccessRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     PortfolioId: string,
     *     OrganizationParentId?: string|null,
     *     PageToken?: string|null,
     *     PageSize?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
