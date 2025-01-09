<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DeleteTrustStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $trustStoreArn
 */
class DeleteTrustStoreRequest extends Request
{
    /**
     * @param array{trustStoreArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
