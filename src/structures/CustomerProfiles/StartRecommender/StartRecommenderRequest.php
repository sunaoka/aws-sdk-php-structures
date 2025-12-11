<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\StartRecommender;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $RecommenderName
 */
class StartRecommenderRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     RecommenderName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
