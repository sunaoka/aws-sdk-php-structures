<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateRecommender;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $RecommenderName
 * @property string|null $Description
 * @property Shapes\RecommenderConfig|null $RecommenderConfig
 */
class UpdateRecommenderRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     RecommenderName: string,
     *     Description?: string|null,
     *     RecommenderConfig?: Shapes\RecommenderConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
