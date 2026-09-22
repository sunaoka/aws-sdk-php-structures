<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetAccessGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $grantId
 */
class GetAccessGrantRequest extends Request
{
    /**
     * @param array{grantId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
