<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ViewId
 */
class DeleteViewRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ViewId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
