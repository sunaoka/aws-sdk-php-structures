<?php

namespace Sunaoka\Aws\Structures\imagebuilder;

class imagebuilderClient extends \Aws\imagebuilder\imagebuilderClient
{
    use CancelImageCreation\CancelImageCreationTrait;
    use CreateComponent\CreateComponentTrait;
    use CreateContainerRecipe\CreateContainerRecipeTrait;
    use CreateDistributionConfiguration\CreateDistributionConfigurationTrait;
    use CreateImage\CreateImageTrait;
    use CreateImagePipeline\CreateImagePipelineTrait;
    use CreateImageRecipe\CreateImageRecipeTrait;
    use CreateInfrastructureConfiguration\CreateInfrastructureConfigurationTrait;
    use DeleteComponent\DeleteComponentTrait;
    use DeleteContainerRecipe\DeleteContainerRecipeTrait;
    use DeleteDistributionConfiguration\DeleteDistributionConfigurationTrait;
    use DeleteImage\DeleteImageTrait;
    use DeleteImagePipeline\DeleteImagePipelineTrait;
    use DeleteImageRecipe\DeleteImageRecipeTrait;
    use DeleteInfrastructureConfiguration\DeleteInfrastructureConfigurationTrait;
    use GetComponent\GetComponentTrait;
    use GetComponentPolicy\GetComponentPolicyTrait;
    use GetContainerRecipe\GetContainerRecipeTrait;
    use GetContainerRecipePolicy\GetContainerRecipePolicyTrait;
    use GetDistributionConfiguration\GetDistributionConfigurationTrait;
    use GetImage\GetImageTrait;
    use GetImagePipeline\GetImagePipelineTrait;
    use GetImagePolicy\GetImagePolicyTrait;
    use GetImageRecipe\GetImageRecipeTrait;
    use GetImageRecipePolicy\GetImageRecipePolicyTrait;
    use GetInfrastructureConfiguration\GetInfrastructureConfigurationTrait;
    use GetWorkflowExecution\GetWorkflowExecutionTrait;
    use GetWorkflowStepExecution\GetWorkflowStepExecutionTrait;
    use ImportComponent\ImportComponentTrait;
    use ImportVmImage\ImportVmImageTrait;
    use ListComponentBuildVersions\ListComponentBuildVersionsTrait;
    use ListComponents\ListComponentsTrait;
    use ListContainerRecipes\ListContainerRecipesTrait;
    use ListDistributionConfigurations\ListDistributionConfigurationsTrait;
    use ListImageBuildVersions\ListImageBuildVersionsTrait;
    use ListImagePackages\ListImagePackagesTrait;
    use ListImagePipelineImages\ListImagePipelineImagesTrait;
    use ListImagePipelines\ListImagePipelinesTrait;
    use ListImageRecipes\ListImageRecipesTrait;
    use ListImageScanFindingAggregations\ListImageScanFindingAggregationsTrait;
    use ListImageScanFindings\ListImageScanFindingsTrait;
    use ListImages\ListImagesTrait;
    use ListInfrastructureConfigurations\ListInfrastructureConfigurationsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListWorkflowExecutions\ListWorkflowExecutionsTrait;
    use ListWorkflowStepExecutions\ListWorkflowStepExecutionsTrait;
    use PutComponentPolicy\PutComponentPolicyTrait;
    use PutContainerRecipePolicy\PutContainerRecipePolicyTrait;
    use PutImagePolicy\PutImagePolicyTrait;
    use PutImageRecipePolicy\PutImageRecipePolicyTrait;
    use StartImagePipelineExecution\StartImagePipelineExecutionTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateDistributionConfiguration\UpdateDistributionConfigurationTrait;
    use UpdateImagePipeline\UpdateImagePipelineTrait;
    use UpdateInfrastructureConfiguration\UpdateInfrastructureConfigurationTrait;
}
