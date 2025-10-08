<?php

namespace Sunaoka\Aws\Structures\Glacier;

class GlacierClient extends \Aws\Glacier\GlacierClient
{
    use AbortMultipartUpload\AbortMultipartUploadTrait;
    use AbortVaultLock\AbortVaultLockTrait;
    use AddTagsToVault\AddTagsToVaultTrait;
    use CompleteMultipartUpload\CompleteMultipartUploadTrait;
    use CompleteVaultLock\CompleteVaultLockTrait;
    use CreateVault\CreateVaultTrait;
    use DeleteArchive\DeleteArchiveTrait;
    use DeleteVault\DeleteVaultTrait;
    use DeleteVaultAccessPolicy\DeleteVaultAccessPolicyTrait;
    use DeleteVaultNotifications\DeleteVaultNotificationsTrait;
    use DescribeJob\DescribeJobTrait;
    use DescribeVault\DescribeVaultTrait;
    use GetDataRetrievalPolicy\GetDataRetrievalPolicyTrait;
    use GetJobOutput\GetJobOutputTrait;
    use GetVaultAccessPolicy\GetVaultAccessPolicyTrait;
    use GetVaultLock\GetVaultLockTrait;
    use GetVaultNotifications\GetVaultNotificationsTrait;
    use InitiateJob\InitiateJobTrait;
    use InitiateMultipartUpload\InitiateMultipartUploadTrait;
    use InitiateVaultLock\InitiateVaultLockTrait;
    use ListJobs\ListJobsTrait;
    use ListMultipartUploads\ListMultipartUploadsTrait;
    use ListParts\ListPartsTrait;
    use ListProvisionedCapacity\ListProvisionedCapacityTrait;
    use ListTagsForVault\ListTagsForVaultTrait;
    use ListVaults\ListVaultsTrait;
    use PurchaseProvisionedCapacity\PurchaseProvisionedCapacityTrait;
    use RemoveTagsFromVault\RemoveTagsFromVaultTrait;
    use SetDataRetrievalPolicy\SetDataRetrievalPolicyTrait;
    use SetVaultAccessPolicy\SetVaultAccessPolicyTrait;
    use SetVaultNotifications\SetVaultNotificationsTrait;
    use UploadArchive\UploadArchiveTrait;
    use UploadMultipartPart\UploadMultipartPartTrait;
}
