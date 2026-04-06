<?php

namespace Sunaoka\Aws\Structures\KinesisVideo;

class KinesisVideoClient extends \Aws\KinesisVideo\KinesisVideoClient
{
    use CreateSignalingChannel\CreateSignalingChannelTrait;
    use CreateStream\CreateStreamTrait;
    use DeleteEdgeConfiguration\DeleteEdgeConfigurationTrait;
    use DeleteSignalingChannel\DeleteSignalingChannelTrait;
    use DeleteStream\DeleteStreamTrait;
    use DescribeEdgeConfiguration\DescribeEdgeConfigurationTrait;
    use DescribeImageGenerationConfiguration\DescribeImageGenerationConfigurationTrait;
    use DescribeMappedResourceConfiguration\DescribeMappedResourceConfigurationTrait;
    use DescribeMediaStorageConfiguration\DescribeMediaStorageConfigurationTrait;
    use DescribeNotificationConfiguration\DescribeNotificationConfigurationTrait;
    use DescribeSignalingChannel\DescribeSignalingChannelTrait;
    use DescribeStream\DescribeStreamTrait;
    use GetDataEndpoint\GetDataEndpointTrait;
    use GetSignalingChannelEndpoint\GetSignalingChannelEndpointTrait;
    use ListEdgeAgentConfigurations\ListEdgeAgentConfigurationsTrait;
    use ListSignalingChannels\ListSignalingChannelsTrait;
    use ListStreams\ListStreamsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTagsForStream\ListTagsForStreamTrait;
    use StartEdgeConfigurationUpdate\StartEdgeConfigurationUpdateTrait;
    use TagResource\TagResourceTrait;
    use TagStream\TagStreamTrait;
    use UntagResource\UntagResourceTrait;
    use UntagStream\UntagStreamTrait;
    use UpdateDataRetention\UpdateDataRetentionTrait;
    use UpdateImageGenerationConfiguration\UpdateImageGenerationConfigurationTrait;
    use UpdateMediaStorageConfiguration\UpdateMediaStorageConfigurationTrait;
    use UpdateNotificationConfiguration\UpdateNotificationConfigurationTrait;
    use UpdateSignalingChannel\UpdateSignalingChannelTrait;
    use UpdateStream\UpdateStreamTrait;
}
