<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetArchitectureRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 * @property string $RecoveryGroupName
 */
class GetArchitectureRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string,
     *     RecoveryGroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
