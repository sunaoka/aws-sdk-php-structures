<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\ListMediaInsightsPipelineConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListMediaInsightsPipelineConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
