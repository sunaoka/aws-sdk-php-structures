<?php

namespace Sunaoka\Aws\Structures\SesV2\PutSuppressedDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EmailAddress
 * @property 'BOUNCE'|'COMPLAINT' $Reason
 */
class PutSuppressedDestinationRequest extends Request
{
    /**
     * @param array{
     *     EmailAddress: string,
     *     Reason: 'BOUNCE'|'COMPLAINT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
