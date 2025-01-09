<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatabaseId
 * @property Shapes\RecommendationSettings $Settings
 */
class StartRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     DatabaseId: string,
     *     Settings: Shapes\RecommendationSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
