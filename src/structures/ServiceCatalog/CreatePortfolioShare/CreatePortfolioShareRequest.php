<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreatePortfolioShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $PortfolioId
 * @property string $AccountId
 * @property Shapes\OrganizationNode $OrganizationNode
 * @property bool $ShareTagOptions
 * @property bool $SharePrincipals
 */
class CreatePortfolioShareRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     PortfolioId: string,
     *     AccountId?: string,
     *     OrganizationNode?: Shapes\OrganizationNode,
     *     ShareTagOptions?: bool,
     *     SharePrincipals?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
