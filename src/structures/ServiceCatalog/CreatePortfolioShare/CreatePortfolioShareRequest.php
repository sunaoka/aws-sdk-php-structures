<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreatePortfolioShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $PortfolioId
 * @property string|null $AccountId
 * @property Shapes\OrganizationNode|null $OrganizationNode
 * @property bool|null $ShareTagOptions
 * @property bool|null $SharePrincipals
 */
class CreatePortfolioShareRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     PortfolioId: string,
     *     AccountId?: string|null,
     *     OrganizationNode?: Shapes\OrganizationNode|null,
     *     ShareTagOptions?: bool|null,
     *     SharePrincipals?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
