<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProcessDetails|null $ModifyingProcess
 * @property \Aws\Api\DateTimeResult|null $ModifiedAt
 * @property string|null $ScriptPath
 * @property string|null $LibraryPath
 * @property string|null $LdPreloadValue
 * @property string|null $SocketPath
 * @property string|null $RuncBinaryPath
 * @property string|null $ReleaseAgentPath
 * @property string|null $MountSource
 * @property string|null $MountTarget
 * @property string|null $FileSystemType
 * @property list<string>|null $Flags
 * @property string|null $ModuleName
 * @property string|null $ModuleFilePath
 * @property string|null $ModuleSha256
 * @property string|null $ShellHistoryFilePath
 * @property ProcessDetails|null $TargetProcess
 * @property string|null $AddressFamily
 * @property int|null $IanaProtocolNumber
 * @property list<string>|null $MemoryRegions
 * @property string|null $ToolName
 * @property string|null $ToolCategory
 * @property string|null $ServiceName
 * @property string|null $CommandLineExample
 * @property string|null $ThreatFilePath
 */
class RuntimeContext extends Shape
{
    /**
     * @param array{
     *     ModifyingProcess?: ProcessDetails|null,
     *     ModifiedAt?: \Aws\Api\DateTimeResult|null,
     *     ScriptPath?: string|null,
     *     LibraryPath?: string|null,
     *     LdPreloadValue?: string|null,
     *     SocketPath?: string|null,
     *     RuncBinaryPath?: string|null,
     *     ReleaseAgentPath?: string|null,
     *     MountSource?: string|null,
     *     MountTarget?: string|null,
     *     FileSystemType?: string|null,
     *     Flags?: list<string>|null,
     *     ModuleName?: string|null,
     *     ModuleFilePath?: string|null,
     *     ModuleSha256?: string|null,
     *     ShellHistoryFilePath?: string|null,
     *     TargetProcess?: ProcessDetails|null,
     *     AddressFamily?: string|null,
     *     IanaProtocolNumber?: int|null,
     *     MemoryRegions?: list<string>|null,
     *     ToolName?: string|null,
     *     ToolCategory?: string|null,
     *     ServiceName?: string|null,
     *     CommandLineExample?: string|null,
     *     ThreatFilePath?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
