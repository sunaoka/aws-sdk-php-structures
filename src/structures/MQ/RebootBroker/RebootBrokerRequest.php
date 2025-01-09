<?php

namespace Sunaoka\Aws\Structures\MQ\RebootBroker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BrokerId
 */
class RebootBrokerRequest extends Request
{
    /**
     * @param array{BrokerId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
