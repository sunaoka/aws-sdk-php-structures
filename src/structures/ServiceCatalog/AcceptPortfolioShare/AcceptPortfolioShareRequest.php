<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\AcceptPortfolioShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $PortfolioId
 * @property 'IMPORTED'|'AWS_SERVICECATALOG'|'AWS_ORGANIZATIONS'|null $PortfolioShareType
 */
class AcceptPortfolioShareRequest extends Request
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
