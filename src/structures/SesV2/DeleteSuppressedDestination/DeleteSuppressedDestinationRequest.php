<?php

namespace Sunaoka\Aws\Structures\SesV2\DeleteSuppressedDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EmailAddress
 */
class DeleteSuppressedDestinationRequest extends Request
{
    /**
     * @param array{EmailAddress: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
