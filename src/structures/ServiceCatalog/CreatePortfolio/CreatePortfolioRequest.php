<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreatePortfolio;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $DisplayName
 * @property string|null $Description
 * @property string $ProviderName
 * @property list<Shapes\Tag>|null $Tags
 * @property string $IdempotencyToken
 */
class CreatePortfolioRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     DisplayName: string,
     *     Description?: string|null,
     *     ProviderName: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     IdempotencyToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
