<?php

namespace Sunaoka\Aws\Structures\LookoutforVision;

class LookoutforVisionClient extends \Aws\LookoutforVision\LookoutforVisionClient
{
    use CreateDataset\CreateDatasetTrait;
    use CreateModel\CreateModelTrait;
    use CreateProject\CreateProjectTrait;
    use DeleteDataset\DeleteDatasetTrait;
    use DeleteModel\DeleteModelTrait;
    use DeleteProject\DeleteProjectTrait;
    use DescribeDataset\DescribeDatasetTrait;
    use DescribeModel\DescribeModelTrait;
    use DescribeModelPackagingJob\DescribeModelPackagingJobTrait;
    use DescribeProject\DescribeProjectTrait;
    use DetectAnomalies\DetectAnomaliesTrait;
    use ListDatasetEntries\ListDatasetEntriesTrait;
    use ListModelPackagingJobs\ListModelPackagingJobsTrait;
    use ListModels\ListModelsTrait;
    use ListProjects\ListProjectsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartModel\StartModelTrait;
    use StartModelPackagingJob\StartModelPackagingJobTrait;
    use StopModel\StopModelTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateDatasetEntries\UpdateDatasetEntriesTrait;
}
