<?php

namespace Sunaoka\Aws\Structures\DataExchange\DeleteDataGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataGrantId
 */
class DeleteDataGrantRequest extends Request
{
    /**
     * @param array{DataGrantId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
