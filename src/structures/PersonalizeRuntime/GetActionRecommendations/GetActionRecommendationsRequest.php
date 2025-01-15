<?php

namespace Sunaoka\Aws\Structures\PersonalizeRuntime\GetActionRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $campaignArn
 * @property string|null $userId
 * @property int<0, max>|null $numResults
 * @property string|null $filterArn
 * @property array<string, string>|null $filterValues
 */
class GetActionRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     campaignArn?: string|null,
     *     userId?: string|null,
     *     numResults?: int<0, max>|null,
     *     filterArn?: string|null,
     *     filterValues?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
