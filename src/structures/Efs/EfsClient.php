<?php

namespace Sunaoka\Aws\Structures\Efs;

class EfsClient extends \Aws\Efs\EfsClient
{
    use CreateAccessPoint\CreateAccessPointTrait;
    use CreateFileSystem\CreateFileSystemTrait;
    use CreateMountTarget\CreateMountTargetTrait;
    use CreateReplicationConfiguration\CreateReplicationConfigurationTrait;
    use CreateTags\CreateTagsTrait;
    use DeleteAccessPoint\DeleteAccessPointTrait;
    use DeleteFileSystem\DeleteFileSystemTrait;
    use DeleteFileSystemPolicy\DeleteFileSystemPolicyTrait;
    use DeleteMountTarget\DeleteMountTargetTrait;
    use DeleteReplicationConfiguration\DeleteReplicationConfigurationTrait;
    use DeleteTags\DeleteTagsTrait;
    use DescribeAccessPoints\DescribeAccessPointsTrait;
    use DescribeAccountPreferences\DescribeAccountPreferencesTrait;
    use DescribeBackupPolicy\DescribeBackupPolicyTrait;
    use DescribeFileSystemPolicy\DescribeFileSystemPolicyTrait;
    use DescribeFileSystems\DescribeFileSystemsTrait;
    use DescribeLifecycleConfiguration\DescribeLifecycleConfigurationTrait;
    use DescribeMountTargetSecurityGroups\DescribeMountTargetSecurityGroupsTrait;
    use DescribeMountTargets\DescribeMountTargetsTrait;
    use DescribeReplicationConfigurations\DescribeReplicationConfigurationsTrait;
    use DescribeTags\DescribeTagsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ModifyMountTargetSecurityGroups\ModifyMountTargetSecurityGroupsTrait;
    use PutAccountPreferences\PutAccountPreferencesTrait;
    use PutBackupPolicy\PutBackupPolicyTrait;
    use PutFileSystemPolicy\PutFileSystemPolicyTrait;
    use PutLifecycleConfiguration\PutLifecycleConfigurationTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateFileSystem\UpdateFileSystemTrait;
    use UpdateFileSystemProtection\UpdateFileSystemProtectionTrait;
}
