<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\AcceptPortfolioShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $PortfolioId
 * @property 'IMPORTED'|'AWS_SERVICECATALOG'|'AWS_ORGANIZATIONS' $PortfolioShareType
 */
class AcceptPortfolioShareRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     PortfolioId: string,
     *     PortfolioShareType?: 'IMPORTED'|'AWS_SERVICECATALOG'|'AWS_ORGANIZATIONS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
