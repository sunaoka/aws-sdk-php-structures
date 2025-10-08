<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2;

class CloudHSMV2Client extends \Aws\CloudHSMV2\CloudHSMV2Client
{
    use CopyBackupToRegion\CopyBackupToRegionTrait;
    use CreateCluster\CreateClusterTrait;
    use CreateHsm\CreateHsmTrait;
    use DeleteBackup\DeleteBackupTrait;
    use DeleteCluster\DeleteClusterTrait;
    use DeleteHsm\DeleteHsmTrait;
    use DeleteResourcePolicy\DeleteResourcePolicyTrait;
    use DescribeBackups\DescribeBackupsTrait;
    use DescribeClusters\DescribeClustersTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use InitializeCluster\InitializeClusterTrait;
    use ListTags\ListTagsTrait;
    use ModifyBackupAttributes\ModifyBackupAttributesTrait;
    use ModifyCluster\ModifyClusterTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use RestoreBackup\RestoreBackupTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
