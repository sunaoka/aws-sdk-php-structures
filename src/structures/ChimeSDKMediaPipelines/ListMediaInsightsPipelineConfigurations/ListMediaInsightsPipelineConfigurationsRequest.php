<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\ListMediaInsightsPipelineConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListMediaInsightsPipelineConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
