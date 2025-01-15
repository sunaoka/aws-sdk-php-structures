<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\RejectPortfolioShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $PortfolioId
 * @property 'IMPORTED'|'AWS_SERVICECATALOG'|'AWS_ORGANIZATIONS'|null $PortfolioShareType
 */
class RejectPortfolioShareRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     PortfolioId: string,
     *     PortfolioShareType?: 'IMPORTED'|'AWS_SERVICECATALOG'|'AWS_ORGANIZATIONS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
