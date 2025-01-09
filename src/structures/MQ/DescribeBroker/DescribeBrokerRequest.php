<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBroker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BrokerId
 */
class DescribeBrokerRequest extends Request
{
    /**
     * @param array{BrokerId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
