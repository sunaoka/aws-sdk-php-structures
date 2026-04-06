<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $ClientToken
 */
class DeleteInstanceRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
