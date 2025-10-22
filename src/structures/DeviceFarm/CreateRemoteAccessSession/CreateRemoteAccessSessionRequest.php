<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\CreateRemoteAccessSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectArn
 * @property string $deviceArn
 * @property string|null $appArn
 * @property string|null $instanceArn
 * @property string|null $sshPublicKey
 * @property bool|null $remoteDebugEnabled
 * @property bool|null $remoteRecordEnabled
 * @property string|null $remoteRecordAppArn
 * @property string|null $name
 * @property string|null $clientId
 * @property Shapes\CreateRemoteAccessSessionConfiguration|null $configuration
 * @property 'INTERACTIVE'|'NO_VIDEO'|'VIDEO_ONLY'|null $interactionMode
 * @property bool|null $skipAppResign
 */
class CreateRemoteAccessSessionRequest extends Request
{
    /**
     * @param array{
     *     projectArn: string,
     *     deviceArn: string,
     *     appArn?: string|null,
     *     instanceArn?: string|null,
     *     sshPublicKey?: string|null,
     *     remoteDebugEnabled?: bool|null,
     *     remoteRecordEnabled?: bool|null,
     *     remoteRecordAppArn?: string|null,
     *     name?: string|null,
     *     clientId?: string|null,
     *     configuration?: Shapes\CreateRemoteAccessSessionConfiguration|null,
     *     interactionMode?: 'INTERACTIVE'|'NO_VIDEO'|'VIDEO_ONLY'|null,
     *     skipAppResign?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
