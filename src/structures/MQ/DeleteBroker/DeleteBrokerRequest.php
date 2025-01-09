<?php

namespace Sunaoka\Aws\Structures\MQ\DeleteBroker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BrokerId
 */
class DeleteBrokerRequest extends Request
{
    /**
     * @param array{BrokerId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
