<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdatePortfolio;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $Id
 * @property string $DisplayName
 * @property string $Description
 * @property string $ProviderName
 * @property list<Shapes\Tag> $AddTags
 * @property list<string> $RemoveTags
 */
class UpdatePortfolioRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     Id: string,
     *     DisplayName?: string,
     *     Description?: string,
     *     ProviderName?: string,
     *     AddTags?: list<Shapes\Tag>,
     *     RemoveTags?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
