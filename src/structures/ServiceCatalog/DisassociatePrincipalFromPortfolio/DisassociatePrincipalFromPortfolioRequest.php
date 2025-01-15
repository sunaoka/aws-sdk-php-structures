<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DisassociatePrincipalFromPortfolio;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $PortfolioId
 * @property string $PrincipalARN
 * @property 'IAM'|'IAM_PATTERN'|null $PrincipalType
 */
class DisassociatePrincipalFromPortfolioRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     PortfolioId: string,
     *     PrincipalARN: string,
     *     PrincipalType?: 'IAM'|'IAM_PATTERN'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
