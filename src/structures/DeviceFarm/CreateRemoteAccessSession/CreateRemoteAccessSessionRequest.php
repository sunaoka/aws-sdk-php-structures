<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\CreateRemoteAccessSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectArn
 * @property string $deviceArn
 * @property string $instanceArn
 * @property string $sshPublicKey
 * @property bool $remoteDebugEnabled
 * @property bool $remoteRecordEnabled
 * @property string $remoteRecordAppArn
 * @property string $name
 * @property string $clientId
 * @property Shapes\CreateRemoteAccessSessionConfiguration $configuration
 * @property 'INTERACTIVE'|'NO_VIDEO'|'VIDEO_ONLY' $interactionMode
 * @property bool $skipAppResign
 */
class CreateRemoteAccessSessionRequest extends Request
{
    /**
     * @param array{
     *     projectArn: string,
     *     deviceArn: string,
     *     instanceArn?: string,
     *     sshPublicKey?: string,
     *     remoteDebugEnabled?: bool,
     *     remoteRecordEnabled?: bool,
     *     remoteRecordAppArn?: string,
     *     name?: string,
     *     clientId?: string,
     *     configuration?: Shapes\CreateRemoteAccessSessionConfiguration,
     *     interactionMode?: 'INTERACTIVE'|'NO_VIDEO'|'VIDEO_ONLY',
     *     skipAppResign?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
