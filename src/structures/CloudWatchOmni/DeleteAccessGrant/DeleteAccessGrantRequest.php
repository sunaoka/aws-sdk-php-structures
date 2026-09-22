<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\DeleteAccessGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $grantId
 */
class DeleteAccessGrantRequest extends Request
{
    /**
     * @param array{grantId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
