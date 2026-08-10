<?php

namespace Sunaoka\Aws\Structures\ElementalInference\SearchFixtures;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'basketball'|'american-football' $sport
 * @property string $startDate
 * @property string|null $endDate
 * @property list<Shapes\SearchFilter>|null $filters
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class SearchFixturesRequest extends Request
{
    /**
     * @param array{
     *     sport: 'basketball'|'american-football',
     *     startDate: string,
     *     endDate?: string|null,
     *     filters?: list<Shapes\SearchFilter>|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
