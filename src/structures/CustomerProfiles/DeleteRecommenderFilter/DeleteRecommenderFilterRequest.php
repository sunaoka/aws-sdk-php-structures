<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DeleteRecommenderFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $RecommenderFilterName
 */
class DeleteRecommenderFilterRequest extends Request
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
