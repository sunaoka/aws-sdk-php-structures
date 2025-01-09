<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProcessDetails $ModifyingProcess
 * @property \Aws\Api\DateTimeResult $ModifiedAt
 * @property string $ScriptPath
 * @property string $LibraryPath
 * @property string $LdPreloadValue
 * @property string $SocketPath
 * @property string $RuncBinaryPath
 * @property string $ReleaseAgentPath
 * @property string $MountSource
 * @property string $MountTarget
 * @property string $FileSystemType
 * @property list<string> $Flags
 * @property string $ModuleName
 * @property string $ModuleFilePath
 * @property string $ModuleSha256
 * @property string $ShellHistoryFilePath
 * @property ProcessDetails $TargetProcess
 * @property string $AddressFamily
 * @property int $IanaProtocolNumber
 * @property list<string> $MemoryRegions
 * @property string $ToolName
 * @property string $ToolCategory
 * @property string $ServiceName
 * @property string $CommandLineExample
 * @property string $ThreatFilePath
 */
class RuntimeContext extends Shape
{
    /**
     * @param array{
     *     ModifyingProcess?: ProcessDetails,
     *     ModifiedAt?: \Aws\Api\DateTimeResult,
     *     ScriptPath?: string,
     *     LibraryPath?: string,
     *     LdPreloadValue?: string,
     *     SocketPath?: string,
     *     RuncBinaryPath?: string,
     *     ReleaseAgentPath?: string,
     *     MountSource?: string,
     *     MountTarget?: string,
     *     FileSystemType?: string,
     *     Flags?: list<string>,
     *     ModuleName?: string,
     *     ModuleFilePath?: string,
     *     ModuleSha256?: string,
     *     ShellHistoryFilePath?: string,
     *     TargetProcess?: ProcessDetails,
     *     AddressFamily?: string,
     *     IanaProtocolNumber?: int,
     *     MemoryRegions?: list<string>,
     *     ToolName?: string,
     *     ToolCategory?: string,
     *     ServiceName?: string,
     *     CommandLineExample?: string,
     *     ThreatFilePath?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
