<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DeletePortfolioShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $PortfolioId
 * @property string $AccountId
 * @property Shapes\OrganizationNode $OrganizationNode
 */
class DeletePortfolioShareRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     PortfolioId: string,
     *     AccountId?: string,
     *     OrganizationNode?: Shapes\OrganizationNode
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
