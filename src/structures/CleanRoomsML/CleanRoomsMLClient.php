<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML;

class CleanRoomsMLClient extends \Aws\CleanRoomsML\CleanRoomsMLClient
{
    use CancelTrainedModel\CancelTrainedModelTrait;
    use CancelTrainedModelInferenceJob\CancelTrainedModelInferenceJobTrait;
    use CreateAudienceModel\CreateAudienceModelTrait;
    use CreateConfiguredAudienceModel\CreateConfiguredAudienceModelTrait;
    use CreateConfiguredModelAlgorithm\CreateConfiguredModelAlgorithmTrait;
    use CreateConfiguredModelAlgorithmAssociation\CreateConfiguredModelAlgorithmAssociationTrait;
    use CreateMLInputChannel\CreateMLInputChannelTrait;
    use CreateTrainedModel\CreateTrainedModelTrait;
    use CreateTrainingDataset\CreateTrainingDatasetTrait;
    use DeleteAudienceGenerationJob\DeleteAudienceGenerationJobTrait;
    use DeleteAudienceModel\DeleteAudienceModelTrait;
    use DeleteConfiguredAudienceModel\DeleteConfiguredAudienceModelTrait;
    use DeleteConfiguredAudienceModelPolicy\DeleteConfiguredAudienceModelPolicyTrait;
    use DeleteConfiguredModelAlgorithm\DeleteConfiguredModelAlgorithmTrait;
    use DeleteConfiguredModelAlgorithmAssociation\DeleteConfiguredModelAlgorithmAssociationTrait;
    use DeleteMLConfiguration\DeleteMLConfigurationTrait;
    use DeleteMLInputChannelData\DeleteMLInputChannelDataTrait;
    use DeleteTrainedModelOutput\DeleteTrainedModelOutputTrait;
    use DeleteTrainingDataset\DeleteTrainingDatasetTrait;
    use GetAudienceGenerationJob\GetAudienceGenerationJobTrait;
    use GetAudienceModel\GetAudienceModelTrait;
    use GetCollaborationConfiguredModelAlgorithmAssociation\GetCollaborationConfiguredModelAlgorithmAssociationTrait;
    use GetCollaborationMLInputChannel\GetCollaborationMLInputChannelTrait;
    use GetCollaborationTrainedModel\GetCollaborationTrainedModelTrait;
    use GetConfiguredAudienceModel\GetConfiguredAudienceModelTrait;
    use GetConfiguredAudienceModelPolicy\GetConfiguredAudienceModelPolicyTrait;
    use GetConfiguredModelAlgorithm\GetConfiguredModelAlgorithmTrait;
    use GetConfiguredModelAlgorithmAssociation\GetConfiguredModelAlgorithmAssociationTrait;
    use GetMLConfiguration\GetMLConfigurationTrait;
    use GetMLInputChannel\GetMLInputChannelTrait;
    use GetTrainedModel\GetTrainedModelTrait;
    use GetTrainedModelInferenceJob\GetTrainedModelInferenceJobTrait;
    use GetTrainingDataset\GetTrainingDatasetTrait;
    use ListAudienceExportJobs\ListAudienceExportJobsTrait;
    use ListAudienceGenerationJobs\ListAudienceGenerationJobsTrait;
    use ListAudienceModels\ListAudienceModelsTrait;
    use ListCollaborationConfiguredModelAlgorithmAssociations\ListCollaborationConfiguredModelAlgorithmAssociationsTrait;
    use ListCollaborationMLInputChannels\ListCollaborationMLInputChannelsTrait;
    use ListCollaborationTrainedModelExportJobs\ListCollaborationTrainedModelExportJobsTrait;
    use ListCollaborationTrainedModelInferenceJobs\ListCollaborationTrainedModelInferenceJobsTrait;
    use ListCollaborationTrainedModels\ListCollaborationTrainedModelsTrait;
    use ListConfiguredAudienceModels\ListConfiguredAudienceModelsTrait;
    use ListConfiguredModelAlgorithmAssociations\ListConfiguredModelAlgorithmAssociationsTrait;
    use ListConfiguredModelAlgorithms\ListConfiguredModelAlgorithmsTrait;
    use ListMLInputChannels\ListMLInputChannelsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTrainedModelInferenceJobs\ListTrainedModelInferenceJobsTrait;
    use ListTrainedModelVersions\ListTrainedModelVersionsTrait;
    use ListTrainedModels\ListTrainedModelsTrait;
    use ListTrainingDatasets\ListTrainingDatasetsTrait;
    use PutConfiguredAudienceModelPolicy\PutConfiguredAudienceModelPolicyTrait;
    use PutMLConfiguration\PutMLConfigurationTrait;
    use StartAudienceExportJob\StartAudienceExportJobTrait;
    use StartAudienceGenerationJob\StartAudienceGenerationJobTrait;
    use StartTrainedModelExportJob\StartTrainedModelExportJobTrait;
    use StartTrainedModelInferenceJob\StartTrainedModelInferenceJobTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateConfiguredAudienceModel\UpdateConfiguredAudienceModelTrait;
}
