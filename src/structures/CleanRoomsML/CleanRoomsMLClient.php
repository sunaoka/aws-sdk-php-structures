<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML;

class CleanRoomsMLClient extends \Aws\CleanRoomsML\CleanRoomsMLClient
{
    use CreateAudienceModel\CreateAudienceModelTrait;
    use CreateConfiguredAudienceModel\CreateConfiguredAudienceModelTrait;
    use CreateTrainingDataset\CreateTrainingDatasetTrait;
    use DeleteAudienceGenerationJob\DeleteAudienceGenerationJobTrait;
    use DeleteAudienceModel\DeleteAudienceModelTrait;
    use DeleteConfiguredAudienceModel\DeleteConfiguredAudienceModelTrait;
    use DeleteConfiguredAudienceModelPolicy\DeleteConfiguredAudienceModelPolicyTrait;
    use DeleteTrainingDataset\DeleteTrainingDatasetTrait;
    use GetAudienceGenerationJob\GetAudienceGenerationJobTrait;
    use GetAudienceModel\GetAudienceModelTrait;
    use GetConfiguredAudienceModel\GetConfiguredAudienceModelTrait;
    use GetConfiguredAudienceModelPolicy\GetConfiguredAudienceModelPolicyTrait;
    use GetTrainingDataset\GetTrainingDatasetTrait;
    use ListAudienceExportJobs\ListAudienceExportJobsTrait;
    use ListAudienceGenerationJobs\ListAudienceGenerationJobsTrait;
    use ListAudienceModels\ListAudienceModelsTrait;
    use ListConfiguredAudienceModels\ListConfiguredAudienceModelsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTrainingDatasets\ListTrainingDatasetsTrait;
    use PutConfiguredAudienceModelPolicy\PutConfiguredAudienceModelPolicyTrait;
    use StartAudienceExportJob\StartAudienceExportJobTrait;
    use StartAudienceGenerationJob\StartAudienceGenerationJobTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateConfiguredAudienceModel\UpdateConfiguredAudienceModelTrait;
}
