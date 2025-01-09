<?php

namespace Sunaoka\Aws\Structures\mgn\DeleteVcenterClient;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $vcenterClientID
 */
class DeleteVcenterClientRequest extends Request
{
    /**
     * @param array{vcenterClientID: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
