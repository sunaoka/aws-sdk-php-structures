<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetProfileRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $ProfileId
 * @property string $RecommenderName
 * @property array<string, string>|null $Context
 * @property int<1, 10>|null $MaxResults
 */
class GetProfileRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ProfileId: string,
     *     RecommenderName: string,
     *     Context?: array<string, string>|null,
     *     MaxResults?: int<1, 10>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
