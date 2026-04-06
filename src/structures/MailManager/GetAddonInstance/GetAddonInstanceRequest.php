<?php

namespace Sunaoka\Aws\Structures\MailManager\GetAddonInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AddonInstanceId
 */
class GetAddonInstanceRequest extends Request
{
    /**
     * @param array{AddonInstanceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
