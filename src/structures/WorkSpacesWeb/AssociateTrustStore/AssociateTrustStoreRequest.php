<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\AssociateTrustStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalArn
 * @property string $trustStoreArn
 */
class AssociateTrustStoreRequest extends Request
{
    /**
     * @param array{
     *     portalArn: string,
     *     trustStoreArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
