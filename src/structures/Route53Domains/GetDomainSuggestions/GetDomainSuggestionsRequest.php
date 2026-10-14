<?php

namespace Sunaoka\Aws\Structures\Route53Domains\GetDomainSuggestions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property int $SuggestionCount
 * @property bool $OnlyAvailable
 * @property bool|null $OnlyStandardPrices
 */
class GetDomainSuggestionsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     SuggestionCount: int,
     *     OnlyAvailable: bool,
     *     OnlyStandardPrices?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
