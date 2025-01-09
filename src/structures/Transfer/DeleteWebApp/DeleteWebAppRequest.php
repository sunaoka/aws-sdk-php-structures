<?php

namespace Sunaoka\Aws\Structures\Transfer\DeleteWebApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WebAppId
 */
class DeleteWebAppRequest extends Request
{
    /**
     * @param array{WebAppId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
