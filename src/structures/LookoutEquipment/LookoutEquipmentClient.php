<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment;

class LookoutEquipmentClient extends \Aws\LookoutEquipment\LookoutEquipmentClient
{
    use CreateDataset\CreateDatasetTrait;
    use CreateInferenceScheduler\CreateInferenceSchedulerTrait;
    use CreateLabel\CreateLabelTrait;
    use CreateLabelGroup\CreateLabelGroupTrait;
    use CreateModel\CreateModelTrait;
    use DeleteDataset\DeleteDatasetTrait;
    use DeleteInferenceScheduler\DeleteInferenceSchedulerTrait;
    use DeleteLabel\DeleteLabelTrait;
    use DeleteLabelGroup\DeleteLabelGroupTrait;
    use DeleteModel\DeleteModelTrait;
    use DeleteResourcePolicy\DeleteResourcePolicyTrait;
    use DescribeDataIngestionJob\DescribeDataIngestionJobTrait;
    use DescribeDataset\DescribeDatasetTrait;
    use DescribeInferenceScheduler\DescribeInferenceSchedulerTrait;
    use DescribeLabel\DescribeLabelTrait;
    use DescribeLabelGroup\DescribeLabelGroupTrait;
    use DescribeModel\DescribeModelTrait;
    use DescribeModelVersion\DescribeModelVersionTrait;
    use DescribeResourcePolicy\DescribeResourcePolicyTrait;
    use ImportDataset\ImportDatasetTrait;
    use ImportModelVersion\ImportModelVersionTrait;
    use ListDataIngestionJobs\ListDataIngestionJobsTrait;
    use ListDatasets\ListDatasetsTrait;
    use ListInferenceEvents\ListInferenceEventsTrait;
    use ListInferenceExecutions\ListInferenceExecutionsTrait;
    use ListInferenceSchedulers\ListInferenceSchedulersTrait;
    use ListLabelGroups\ListLabelGroupsTrait;
    use ListLabels\ListLabelsTrait;
    use ListModelVersions\ListModelVersionsTrait;
    use ListModels\ListModelsTrait;
    use ListSensorStatistics\ListSensorStatisticsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use StartDataIngestionJob\StartDataIngestionJobTrait;
    use StartInferenceScheduler\StartInferenceSchedulerTrait;
    use StopInferenceScheduler\StopInferenceSchedulerTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateActiveModelVersion\UpdateActiveModelVersionTrait;
    use UpdateInferenceScheduler\UpdateInferenceSchedulerTrait;
    use UpdateLabelGroup\UpdateLabelGroupTrait;
}
