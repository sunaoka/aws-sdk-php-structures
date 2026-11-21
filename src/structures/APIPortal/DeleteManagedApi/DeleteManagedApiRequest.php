<?php

namespace Sunaoka\Aws\Structures\APIPortal\DeleteManagedApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $managedApiId
 */
class DeleteManagedApiRequest extends Request
{
    /**
     * @param array{managedApiId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
