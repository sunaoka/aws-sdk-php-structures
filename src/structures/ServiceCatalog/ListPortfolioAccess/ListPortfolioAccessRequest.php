<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListPortfolioAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $PortfolioId
 * @property string $OrganizationParentId
 * @property string $PageToken
 * @property int $PageSize
 */
class ListPortfolioAccessRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     PortfolioId: string,
     *     OrganizationParentId?: string,
     *     PageToken?: string,
     *     PageSize?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
