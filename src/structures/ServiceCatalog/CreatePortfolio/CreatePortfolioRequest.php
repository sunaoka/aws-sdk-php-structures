<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreatePortfolio;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $DisplayName
 * @property string $Description
 * @property string $ProviderName
 * @property list<Shapes\Tag> $Tags
 * @property string $IdempotencyToken
 */
class CreatePortfolioRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     DisplayName: string,
     *     Description?: string,
     *     ProviderName: string,
     *     Tags?: list<Shapes\Tag>,
     *     IdempotencyToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
