<?php

namespace Sunaoka\Aws\Structures\Bedrock;

class BedrockClient extends \Aws\Bedrock\BedrockClient
{
    use BatchDeleteEvaluationJob\BatchDeleteEvaluationJobTrait;
    use CreateEvaluationJob\CreateEvaluationJobTrait;
    use CreateGuardrail\CreateGuardrailTrait;
    use CreateGuardrailVersion\CreateGuardrailVersionTrait;
    use CreateInferenceProfile\CreateInferenceProfileTrait;
    use CreateMarketplaceModelEndpoint\CreateMarketplaceModelEndpointTrait;
    use CreateModelCopyJob\CreateModelCopyJobTrait;
    use CreateModelCustomizationJob\CreateModelCustomizationJobTrait;
    use CreateModelImportJob\CreateModelImportJobTrait;
    use CreateModelInvocationJob\CreateModelInvocationJobTrait;
    use CreateProvisionedModelThroughput\CreateProvisionedModelThroughputTrait;
    use DeleteCustomModel\DeleteCustomModelTrait;
    use DeleteGuardrail\DeleteGuardrailTrait;
    use DeleteImportedModel\DeleteImportedModelTrait;
    use DeleteInferenceProfile\DeleteInferenceProfileTrait;
    use DeleteMarketplaceModelEndpoint\DeleteMarketplaceModelEndpointTrait;
    use DeleteModelInvocationLoggingConfiguration\DeleteModelInvocationLoggingConfigurationTrait;
    use DeleteProvisionedModelThroughput\DeleteProvisionedModelThroughputTrait;
    use DeregisterMarketplaceModelEndpoint\DeregisterMarketplaceModelEndpointTrait;
    use GetCustomModel\GetCustomModelTrait;
    use GetEvaluationJob\GetEvaluationJobTrait;
    use GetFoundationModel\GetFoundationModelTrait;
    use GetGuardrail\GetGuardrailTrait;
    use GetImportedModel\GetImportedModelTrait;
    use GetInferenceProfile\GetInferenceProfileTrait;
    use GetMarketplaceModelEndpoint\GetMarketplaceModelEndpointTrait;
    use GetModelCopyJob\GetModelCopyJobTrait;
    use GetModelCustomizationJob\GetModelCustomizationJobTrait;
    use GetModelImportJob\GetModelImportJobTrait;
    use GetModelInvocationJob\GetModelInvocationJobTrait;
    use GetModelInvocationLoggingConfiguration\GetModelInvocationLoggingConfigurationTrait;
    use GetPromptRouter\GetPromptRouterTrait;
    use GetProvisionedModelThroughput\GetProvisionedModelThroughputTrait;
    use ListCustomModels\ListCustomModelsTrait;
    use ListEvaluationJobs\ListEvaluationJobsTrait;
    use ListFoundationModels\ListFoundationModelsTrait;
    use ListGuardrails\ListGuardrailsTrait;
    use ListImportedModels\ListImportedModelsTrait;
    use ListInferenceProfiles\ListInferenceProfilesTrait;
    use ListMarketplaceModelEndpoints\ListMarketplaceModelEndpointsTrait;
    use ListModelCopyJobs\ListModelCopyJobsTrait;
    use ListModelCustomizationJobs\ListModelCustomizationJobsTrait;
    use ListModelImportJobs\ListModelImportJobsTrait;
    use ListModelInvocationJobs\ListModelInvocationJobsTrait;
    use ListPromptRouters\ListPromptRoutersTrait;
    use ListProvisionedModelThroughputs\ListProvisionedModelThroughputsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutModelInvocationLoggingConfiguration\PutModelInvocationLoggingConfigurationTrait;
    use RegisterMarketplaceModelEndpoint\RegisterMarketplaceModelEndpointTrait;
    use StopEvaluationJob\StopEvaluationJobTrait;
    use StopModelCustomizationJob\StopModelCustomizationJobTrait;
    use StopModelInvocationJob\StopModelInvocationJobTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateGuardrail\UpdateGuardrailTrait;
    use UpdateMarketplaceModelEndpoint\UpdateMarketplaceModelEndpointTrait;
    use UpdateProvisionedModelThroughput\UpdateProvisionedModelThroughputTrait;
}
