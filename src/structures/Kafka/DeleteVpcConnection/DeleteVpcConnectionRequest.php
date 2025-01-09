<?php

namespace Sunaoka\Aws\Structures\Kafka\DeleteVpcConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class DeleteVpcConnectionRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
