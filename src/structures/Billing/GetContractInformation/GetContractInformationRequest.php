<?php

namespace Sunaoka\Aws\Structures\Billing\GetContractInformation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $contractArn
 */
class GetContractInformationRequest extends Request
{
    /**
     * @param array{contractArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
