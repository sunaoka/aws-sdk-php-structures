<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetApplicationComponentStrategies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationComponentId
 */
class GetApplicationComponentStrategiesRequest extends Request
{
    /**
     * @param array{applicationComponentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
