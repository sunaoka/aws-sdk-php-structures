<?php

namespace Sunaoka\Aws\Structures\NetworkManager\StartOrganizationServiceAccessUpdate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Action
 */
class StartOrganizationServiceAccessUpdateRequest extends Request
{
    /**
     * @param array{Action: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
