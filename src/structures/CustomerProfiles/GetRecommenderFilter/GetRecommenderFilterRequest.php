<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetRecommenderFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $RecommenderFilterName
 */
class GetRecommenderFilterRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     RecommenderFilterName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
