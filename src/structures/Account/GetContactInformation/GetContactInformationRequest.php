<?php

namespace Sunaoka\Aws\Structures\Account\GetContactInformation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 */
class GetContactInformationRequest extends Request
{
    /**
     * @param array{AccountId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
