<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetApplicationComponentDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationComponentId
 */
class GetApplicationComponentDetailsRequest extends Request
{
    /**
     * @param array{applicationComponentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
