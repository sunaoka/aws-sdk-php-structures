<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\CreateRemoteAccessSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectArn
 * @property string $deviceArn
 * @property string|null $appArn
 * @property string|null $instanceArn
 * @property string|null $name
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
     *     name?: string|null,
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
