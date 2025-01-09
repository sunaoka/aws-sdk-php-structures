<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeTaskExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'POINT_IN_TIME_CONSISTENT'|'ONLY_FILES_TRANSFERRED'|'NONE' $VerifyMode
 * @property 'ALWAYS'|'NEVER' $OverwriteMode
 * @property 'NONE'|'BEST_EFFORT' $Atime
 * @property 'NONE'|'PRESERVE' $Mtime
 * @property 'NONE'|'INT_VALUE'|'NAME'|'BOTH' $Uid
 * @property 'NONE'|'INT_VALUE'|'NAME'|'BOTH' $Gid
 * @property 'PRESERVE'|'REMOVE' $PreserveDeletedFiles
 * @property 'NONE'|'PRESERVE' $PreserveDevices
 * @property 'NONE'|'PRESERVE' $PosixPermissions
 * @property int $BytesPerSecond
 * @property 'ENABLED'|'DISABLED' $TaskQueueing
 * @property 'OFF'|'BASIC'|'TRANSFER' $LogLevel
 * @property 'CHANGED'|'ALL' $TransferMode
 * @property 'NONE'|'OWNER_DACL'|'OWNER_DACL_SACL' $SecurityDescriptorCopyFlags
 * @property 'PRESERVE'|'NONE' $ObjectTags
 */
class Options extends Shape
{
    /**
     * @param array{
     *     VerifyMode?: 'POINT_IN_TIME_CONSISTENT'|'ONLY_FILES_TRANSFERRED'|'NONE',
     *     OverwriteMode?: 'ALWAYS'|'NEVER',
     *     Atime?: 'NONE'|'BEST_EFFORT',
     *     Mtime?: 'NONE'|'PRESERVE',
     *     Uid?: 'NONE'|'INT_VALUE'|'NAME'|'BOTH',
     *     Gid?: 'NONE'|'INT_VALUE'|'NAME'|'BOTH',
     *     PreserveDeletedFiles?: 'PRESERVE'|'REMOVE',
     *     PreserveDevices?: 'NONE'|'PRESERVE',
     *     PosixPermissions?: 'NONE'|'PRESERVE',
     *     BytesPerSecond?: int,
     *     TaskQueueing?: 'ENABLED'|'DISABLED',
     *     LogLevel?: 'OFF'|'BASIC'|'TRANSFER',
     *     TransferMode?: 'CHANGED'|'ALL',
     *     SecurityDescriptorCopyFlags?: 'NONE'|'OWNER_DACL'|'OWNER_DACL_SACL',
     *     ObjectTags?: 'PRESERVE'|'NONE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
