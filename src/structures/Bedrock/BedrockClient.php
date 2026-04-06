<?php

namespace Sunaoka\Aws\Structures\Bedrock;

class BedrockClient extends \Aws\Bedrock\BedrockClient
{
    use CreateEvaluationJob\CreateEvaluationJobTrait;
    use CreateGuardrail\CreateGuardrailTrait;
    use CreateGuardrailVersion\CreateGuardrailVersionTrait;
    use CreateModelCopyJob\CreateModelCopyJobTrait;
    use CreateModelCustomizationJob\CreateModelCustomizationJobTrait;
    use CreateProvisionedModelThroughput\CreateProvisionedModelThroughputTrait;
    use DeleteCustomModel\DeleteCustomModelTrait;
    use DeleteGuardrail\DeleteGuardrailTrait;
    use DeleteModelInvocationLoggingConfiguration\DeleteModelInvocationLoggingConfigurationTrait;
    use DeleteProvisionedModelThroughput\DeleteProvisionedModelThroughputTrait;
    use GetCustomModel\GetCustomModelTrait;
    use GetEvaluationJob\GetEvaluationJobTrait;
    use GetFoundationModel\GetFoundationModelTrait;
    use GetGuardrail\GetGuardrailTrait;
    use GetModelCopyJob\GetModelCopyJobTrait;
    use GetModelCustomizationJob\GetModelCustomizationJobTrait;
    use GetModelInvocationLoggingConfiguration\GetModelInvocationLoggingConfigurationTrait;
    use GetProvisionedModelThroughput\GetProvisionedModelThroughputTrait;
    use ListCustomModels\ListCustomModelsTrait;
    use ListEvaluationJobs\ListEvaluationJobsTrait;
    use ListFoundationModels\ListFoundationModelsTrait;
    use ListGuardrails\ListGuardrailsTrait;
    use ListModelCopyJobs\ListModelCopyJobsTrait;
    use ListModelCustomizationJobs\ListModelCustomizationJobsTrait;
    use ListProvisionedModelThroughputs\ListProvisionedModelThroughputsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutModelInvocationLoggingConfiguration\PutModelInvocationLoggingConfigurationTrait;
    use StopEvaluationJob\StopEvaluationJobTrait;
    use StopModelCustomizationJob\StopModelCustomizationJobTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateGuardrail\UpdateGuardrailTrait;
    use UpdateProvisionedModelThroughput\UpdateProvisionedModelThroughputTrait;
}
