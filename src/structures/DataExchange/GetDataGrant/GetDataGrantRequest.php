<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetDataGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataGrantId
 */
class GetDataGrantRequest extends Request
{
    /**
     * @param array{DataGrantId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
