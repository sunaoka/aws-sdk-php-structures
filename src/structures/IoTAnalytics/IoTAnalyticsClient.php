<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics;

class IoTAnalyticsClient extends \Aws\IoTAnalytics\IoTAnalyticsClient
{
    use BatchPutMessage\BatchPutMessageTrait;
    use CancelPipelineReprocessing\CancelPipelineReprocessingTrait;
    use CreateChannel\CreateChannelTrait;
    use CreateDataset\CreateDatasetTrait;
    use CreateDatasetContent\CreateDatasetContentTrait;
    use CreateDatastore\CreateDatastoreTrait;
    use CreatePipeline\CreatePipelineTrait;
    use DeleteChannel\DeleteChannelTrait;
    use DeleteDataset\DeleteDatasetTrait;
    use DeleteDatasetContent\DeleteDatasetContentTrait;
    use DeleteDatastore\DeleteDatastoreTrait;
    use DeletePipeline\DeletePipelineTrait;
    use DescribeChannel\DescribeChannelTrait;
    use DescribeDataset\DescribeDatasetTrait;
    use DescribeDatastore\DescribeDatastoreTrait;
    use DescribeLoggingOptions\DescribeLoggingOptionsTrait;
    use DescribePipeline\DescribePipelineTrait;
    use GetDatasetContent\GetDatasetContentTrait;
    use ListChannels\ListChannelsTrait;
    use ListDatasetContents\ListDatasetContentsTrait;
    use ListDatasets\ListDatasetsTrait;
    use ListDatastores\ListDatastoresTrait;
    use ListPipelines\ListPipelinesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutLoggingOptions\PutLoggingOptionsTrait;
    use RunPipelineActivity\RunPipelineActivityTrait;
    use SampleChannelData\SampleChannelDataTrait;
    use StartPipelineReprocessing\StartPipelineReprocessingTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateChannel\UpdateChannelTrait;
    use UpdateDataset\UpdateDatasetTrait;
    use UpdateDatastore\UpdateDatastoreTrait;
    use UpdatePipeline\UpdatePipelineTrait;
}
