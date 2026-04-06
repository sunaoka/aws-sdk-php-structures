<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\DeleteSite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeleteSiteRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
