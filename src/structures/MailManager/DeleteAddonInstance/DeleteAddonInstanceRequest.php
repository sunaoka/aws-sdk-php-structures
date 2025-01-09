<?php

namespace Sunaoka\Aws\Structures\MailManager\DeleteAddonInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AddonInstanceId
 */
class DeleteAddonInstanceRequest extends Request
{
    /**
     * @param array{AddonInstanceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
