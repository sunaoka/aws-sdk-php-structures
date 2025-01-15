<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DeletePortfolioShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $PortfolioId
 * @property string|null $AccountId
 * @property Shapes\OrganizationNode|null $OrganizationNode
 */
class DeletePortfolioShareRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     PortfolioId: string,
     *     AccountId?: string|null,
     *     OrganizationNode?: Shapes\OrganizationNode|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
