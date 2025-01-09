<?php

namespace Sunaoka\Aws\Structures\Route53Domains\GetDomainSuggestions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property int $SuggestionCount
 * @property bool $OnlyAvailable
 */
class GetDomainSuggestionsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     SuggestionCount: int,
     *     OnlyAvailable: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
