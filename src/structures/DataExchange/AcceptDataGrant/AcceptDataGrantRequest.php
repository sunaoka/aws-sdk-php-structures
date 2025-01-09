<?php

namespace Sunaoka\Aws\Structures\DataExchange\AcceptDataGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataGrantArn
 */
class AcceptDataGrantRequest extends Request
{
    /**
     * @param array{DataGrantArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
