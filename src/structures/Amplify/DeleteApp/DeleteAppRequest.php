<?php

namespace Sunaoka\Aws\Structures\Amplify\DeleteApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 */
class DeleteAppRequest extends Request
{
    /**
     * @param array{appId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
