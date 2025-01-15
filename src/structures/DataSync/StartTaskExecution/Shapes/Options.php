<?php

namespace Sunaoka\Aws\Structures\DataSync\StartTaskExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'POINT_IN_TIME_CONSISTENT'|'ONLY_FILES_TRANSFERRED'|'NONE'|null $VerifyMode
 * @property 'ALWAYS'|'NEVER'|null $OverwriteMode
 * @property 'NONE'|'BEST_EFFORT'|null $Atime
 * @property 'NONE'|'PRESERVE'|null $Mtime
 * @property 'NONE'|'INT_VALUE'|'NAME'|'BOTH'|null $Uid
 * @property 'NONE'|'INT_VALUE'|'NAME'|'BOTH'|null $Gid
 * @property 'PRESERVE'|'REMOVE'|null $PreserveDeletedFiles
 * @property 'NONE'|'PRESERVE'|null $PreserveDevices
 * @property 'NONE'|'PRESERVE'|null $PosixPermissions
 * @property int<-1, max>|null $BytesPerSecond
 * @property 'ENABLED'|'DISABLED'|null $TaskQueueing
 * @property 'OFF'|'BASIC'|'TRANSFER'|null $LogLevel
 * @property 'CHANGED'|'ALL'|null $TransferMode
 * @property 'NONE'|'OWNER_DACL'|'OWNER_DACL_SACL'|null $SecurityDescriptorCopyFlags
 * @property 'PRESERVE'|'NONE'|null $ObjectTags
 */
class Options extends Shape
{
    /**
     * @param array{
     *     VerifyMode?: 'POINT_IN_TIME_CONSISTENT'|'ONLY_FILES_TRANSFERRED'|'NONE'|null,
     *     OverwriteMode?: 'ALWAYS'|'NEVER'|null,
     *     Atime?: 'NONE'|'BEST_EFFORT'|null,
     *     Mtime?: 'NONE'|'PRESERVE'|null,
     *     Uid?: 'NONE'|'INT_VALUE'|'NAME'|'BOTH'|null,
     *     Gid?: 'NONE'|'INT_VALUE'|'NAME'|'BOTH'|null,
     *     PreserveDeletedFiles?: 'PRESERVE'|'REMOVE'|null,
     *     PreserveDevices?: 'NONE'|'PRESERVE'|null,
     *     PosixPermissions?: 'NONE'|'PRESERVE'|null,
     *     BytesPerSecond?: int<-1, max>|null,
     *     TaskQueueing?: 'ENABLED'|'DISABLED'|null,
     *     LogLevel?: 'OFF'|'BASIC'|'TRANSFER'|null,
     *     TransferMode?: 'CHANGED'|'ALL'|null,
     *     SecurityDescriptorCopyFlags?: 'NONE'|'OWNER_DACL'|'OWNER_DACL_SACL'|null,
     *     ObjectTags?: 'PRESERVE'|'NONE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
