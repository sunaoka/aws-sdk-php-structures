<?php

namespace Sunaoka\Aws\Structures\S3Files;

class S3FilesClient extends \Aws\S3Files\S3FilesClient
{
    use CreateAccessPoint\CreateAccessPointTrait;
    use CreateFileSystem\CreateFileSystemTrait;
    use CreateMountTarget\CreateMountTargetTrait;
    use DeleteAccessPoint\DeleteAccessPointTrait;
    use DeleteFileSystem\DeleteFileSystemTrait;
    use DeleteFileSystemPolicy\DeleteFileSystemPolicyTrait;
    use DeleteMountTarget\DeleteMountTargetTrait;
    use GetAccessPoint\GetAccessPointTrait;
    use GetFileSystem\GetFileSystemTrait;
    use GetFileSystemPolicy\GetFileSystemPolicyTrait;
    use GetMountTarget\GetMountTargetTrait;
    use GetSynchronizationConfiguration\GetSynchronizationConfigurationTrait;
    use ListAccessPoints\ListAccessPointsTrait;
    use ListFileSystems\ListFileSystemsTrait;
    use ListMountTargets\ListMountTargetsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutFileSystemPolicy\PutFileSystemPolicyTrait;
    use PutSynchronizationConfiguration\PutSynchronizationConfigurationTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateMountTarget\UpdateMountTargetTrait;
}
