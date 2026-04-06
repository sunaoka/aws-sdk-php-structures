<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteViewVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ViewId
 * @property int $ViewVersion
 */
class DeleteViewVersionRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ViewId: string,
     *     ViewVersion: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
