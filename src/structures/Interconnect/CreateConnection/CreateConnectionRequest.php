<?php

namespace Sunaoka\Aws\Structures\Interconnect\CreateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property string $bandwidth
 * @property Shapes\AttachPoint $attachPoint
 * @property string $environmentId
 * @property Shapes\RemoteAccountIdentifier|null $remoteAccount
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class CreateConnectionRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     bandwidth: string,
     *     attachPoint: Shapes\AttachPoint,
     *     environmentId: string,
     *     remoteAccount?: Shapes\RemoteAccountIdentifier|null,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
