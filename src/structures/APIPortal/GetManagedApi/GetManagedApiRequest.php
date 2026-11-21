<?php

namespace Sunaoka\Aws\Structures\APIPortal\GetManagedApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $managedApiId
 */
class GetManagedApiRequest extends Request
{
    /**
     * @param array{managedApiId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
