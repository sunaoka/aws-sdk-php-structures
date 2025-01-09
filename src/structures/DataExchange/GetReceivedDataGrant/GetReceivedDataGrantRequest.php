<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetReceivedDataGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataGrantArn
 */
class GetReceivedDataGrantRequest extends Request
{
    /**
     * @param array{DataGrantArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
