<?php

namespace Sunaoka\Aws\Structures\Organizations\RemoveAccountFromOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 */
class RemoveAccountFromOrganizationRequest extends Request
{
    /**
     * @param array{AccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
