<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetTrustStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $trustStoreArn
 */
class GetTrustStoreRequest extends Request
{
    /**
     * @param array{trustStoreArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
