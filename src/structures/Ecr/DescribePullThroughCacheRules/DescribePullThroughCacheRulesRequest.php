<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribePullThroughCacheRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $registryId
 * @property list<string>|null $ecrRepositoryPrefixes
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 */
class DescribePullThroughCacheRulesRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     ecrRepositoryPrefixes?: list<string>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
