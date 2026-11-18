<?php

namespace Sunaoka\Aws\Structures\mgn\DeleteRemoteSourceAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $remoteSourceActionID
 * @property string|null $accountID
 */
class DeleteRemoteSourceActionRequest extends Request
{
    /**
     * @param array{
     *     remoteSourceActionID: string,
     *     accountID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
