<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DeleteApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppId
 */
class DeleteAppRequest extends Request
{
    /**
     * @param array{AppId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
