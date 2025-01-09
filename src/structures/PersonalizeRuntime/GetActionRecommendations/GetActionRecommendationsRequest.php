<?php

namespace Sunaoka\Aws\Structures\PersonalizeRuntime\GetActionRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $campaignArn
 * @property string $userId
 * @property int<0, max> $numResults
 * @property string $filterArn
 * @property array<string, string> $filterValues
 */
class GetActionRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     campaignArn?: string,
     *     userId?: string,
     *     numResults?: int<0, max>,
     *     filterArn?: string,
     *     filterValues?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
