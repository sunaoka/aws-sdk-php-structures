<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\DeleteConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientId
 * @property bool|null $cleanSession
 * @property bool|null $preventWillMessage
 */
class DeleteConnectionRequest extends Request
{
    /**
     * @param array{
     *     clientId: string,
     *     cleanSession?: bool|null,
     *     preventWillMessage?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
