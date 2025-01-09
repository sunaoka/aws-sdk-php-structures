<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribePullThroughCacheRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property list<string> $ecrRepositoryPrefixes
 * @property string $nextToken
 * @property int<1, 1000> $maxResults
 */
class DescribePullThroughCacheRulesRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string,
     *     ecrRepositoryPrefixes?: list<string>,
     *     nextToken?: string,
     *     maxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
