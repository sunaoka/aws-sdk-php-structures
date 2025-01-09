<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DisassociatePrincipalFromPortfolio;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $PortfolioId
 * @property string $PrincipalARN
 * @property 'IAM'|'IAM_PATTERN' $PrincipalType
 */
class DisassociatePrincipalFromPortfolioRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     PortfolioId: string,
     *     PrincipalARN: string,
     *     PrincipalType?: 'IAM'|'IAM_PATTERN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
