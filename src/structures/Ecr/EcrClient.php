<?php

namespace Sunaoka\Aws\Structures\Ecr;

class EcrClient extends \Aws\Ecr\EcrClient
{
    use BatchCheckLayerAvailability\BatchCheckLayerAvailabilityTrait;
    use BatchDeleteImage\BatchDeleteImageTrait;
    use BatchGetImage\BatchGetImageTrait;
    use BatchGetRepositoryScanningConfiguration\BatchGetRepositoryScanningConfigurationTrait;
    use CompleteLayerUpload\CompleteLayerUploadTrait;
    use CreatePullThroughCacheRule\CreatePullThroughCacheRuleTrait;
    use CreateRepository\CreateRepositoryTrait;
    use CreateRepositoryCreationTemplate\CreateRepositoryCreationTemplateTrait;
    use DeleteLifecyclePolicy\DeleteLifecyclePolicyTrait;
    use DeletePullThroughCacheRule\DeletePullThroughCacheRuleTrait;
    use DeleteRegistryPolicy\DeleteRegistryPolicyTrait;
    use DeleteRepository\DeleteRepositoryTrait;
    use DeleteRepositoryCreationTemplate\DeleteRepositoryCreationTemplateTrait;
    use DeleteRepositoryPolicy\DeleteRepositoryPolicyTrait;
    use DescribeImageReplicationStatus\DescribeImageReplicationStatusTrait;
    use DescribeImageScanFindings\DescribeImageScanFindingsTrait;
    use DescribeImages\DescribeImagesTrait;
    use DescribePullThroughCacheRules\DescribePullThroughCacheRulesTrait;
    use DescribeRegistry\DescribeRegistryTrait;
    use DescribeRepositories\DescribeRepositoriesTrait;
    use DescribeRepositoryCreationTemplates\DescribeRepositoryCreationTemplatesTrait;
    use GetAccountSetting\GetAccountSettingTrait;
    use GetAuthorizationToken\GetAuthorizationTokenTrait;
    use GetDownloadUrlForLayer\GetDownloadUrlForLayerTrait;
    use GetLifecyclePolicy\GetLifecyclePolicyTrait;
    use GetLifecyclePolicyPreview\GetLifecyclePolicyPreviewTrait;
    use GetRegistryPolicy\GetRegistryPolicyTrait;
    use GetRegistryScanningConfiguration\GetRegistryScanningConfigurationTrait;
    use GetRepositoryPolicy\GetRepositoryPolicyTrait;
    use InitiateLayerUpload\InitiateLayerUploadTrait;
    use ListImages\ListImagesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutAccountSetting\PutAccountSettingTrait;
    use PutImage\PutImageTrait;
    use PutImageScanningConfiguration\PutImageScanningConfigurationTrait;
    use PutImageTagMutability\PutImageTagMutabilityTrait;
    use PutLifecyclePolicy\PutLifecyclePolicyTrait;
    use PutRegistryPolicy\PutRegistryPolicyTrait;
    use PutRegistryScanningConfiguration\PutRegistryScanningConfigurationTrait;
    use PutReplicationConfiguration\PutReplicationConfigurationTrait;
    use SetRepositoryPolicy\SetRepositoryPolicyTrait;
    use StartImageScan\StartImageScanTrait;
    use StartLifecyclePolicyPreview\StartLifecyclePolicyPreviewTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdatePullThroughCacheRule\UpdatePullThroughCacheRuleTrait;
    use UpdateRepositoryCreationTemplate\UpdateRepositoryCreationTemplateTrait;
    use UploadLayerPart\UploadLayerPartTrait;
    use ValidatePullThroughCacheRule\ValidatePullThroughCacheRuleTrait;
}
