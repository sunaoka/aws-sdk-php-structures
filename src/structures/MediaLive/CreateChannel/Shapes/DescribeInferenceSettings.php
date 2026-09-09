<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FeedArn
 * @property list<AudioFeedInput>|null $AudioFeedInputs
 * @property list<'SCTE35_ELEMENTAL_INFERENCE_QUERY_PARAMS'>|null $EnrichmentMethods
 */
class DescribeInferenceSettings extends Shape
{
    /**
     * @param array{
     *     FeedArn?: string|null,
     *     AudioFeedInputs?: list<AudioFeedInput>|null,
     *     EnrichmentMethods?: list<'SCTE35_ELEMENTAL_INFERENCE_QUERY_PARAMS'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
