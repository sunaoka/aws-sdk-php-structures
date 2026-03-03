<?php

namespace Sunaoka\Aws\Structures\DataZone\QueryGraph;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property list<Shapes\MatchClause> $match
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\AdditionalAttributes|null $additionalAttributes
 */
class QueryGraphRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     match: list<Shapes\MatchClause>,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null,
     *     additionalAttributes?: Shapes\AdditionalAttributes|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
