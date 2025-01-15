<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdatePortfolio;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $Id
 * @property string|null $DisplayName
 * @property string|null $Description
 * @property string|null $ProviderName
 * @property list<Shapes\Tag>|null $AddTags
 * @property list<string>|null $RemoveTags
 */
class UpdatePortfolioRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     Id: string,
     *     DisplayName?: string|null,
     *     Description?: string|null,
     *     ProviderName?: string|null,
     *     AddTags?: list<Shapes\Tag>|null,
     *     RemoveTags?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
