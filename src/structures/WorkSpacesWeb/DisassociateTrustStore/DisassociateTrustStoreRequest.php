<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DisassociateTrustStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalArn
 */
class DisassociateTrustStoreRequest extends Request
{
    /**
     * @param array{portalArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
