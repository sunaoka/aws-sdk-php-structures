<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment;

class LookoutEquipmentClient extends \Aws\LookoutEquipment\LookoutEquipmentClient
{
    use CreateDataset\CreateDatasetTrait;
    use CreateInferenceScheduler\CreateInferenceSchedulerTrait;
    use CreateLabel\CreateLabelTrait;
    use CreateLabelGroup\CreateLabelGroupTrait;
    use CreateModel\CreateModelTrait;
    use CreateRetrainingScheduler\CreateRetrainingSchedulerTrait;
    use DeleteDataset\DeleteDatasetTrait;
    use DeleteInferenceScheduler\DeleteInferenceSchedulerTrait;
    use DeleteLabel\DeleteLabelTrait;
    use DeleteLabelGroup\DeleteLabelGroupTrait;
    use DeleteModel\DeleteModelTrait;
    use DeleteResourcePolicy\DeleteResourcePolicyTrait;
    use DeleteRetrainingScheduler\DeleteRetrainingSchedulerTrait;
    use DescribeDataIngestionJob\DescribeDataIngestionJobTrait;
    use DescribeDataset\DescribeDatasetTrait;
    use DescribeInferenceScheduler\DescribeInferenceSchedulerTrait;
    use DescribeLabel\DescribeLabelTrait;
    use DescribeLabelGroup\DescribeLabelGroupTrait;
    use DescribeModel\DescribeModelTrait;
    use DescribeModelVersion\DescribeModelVersionTrait;
    use DescribeResourcePolicy\DescribeResourcePolicyTrait;
    use DescribeRetrainingScheduler\DescribeRetrainingSchedulerTrait;
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
    use ListRetrainingSchedulers\ListRetrainingSchedulersTrait;
    use ListSensorStatistics\ListSensorStatisticsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use StartDataIngestionJob\StartDataIngestionJobTrait;
    use StartInferenceScheduler\StartInferenceSchedulerTrait;
    use StartRetrainingScheduler\StartRetrainingSchedulerTrait;
    use StopInferenceScheduler\StopInferenceSchedulerTrait;
    use StopRetrainingScheduler\StopRetrainingSchedulerTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateActiveModelVersion\UpdateActiveModelVersionTrait;
    use UpdateInferenceScheduler\UpdateInferenceSchedulerTrait;
    use UpdateLabelGroup\UpdateLabelGroupTrait;
    use UpdateModel\UpdateModelTrait;
    use UpdateRetrainingScheduler\UpdateRetrainingSchedulerTrait;
}
