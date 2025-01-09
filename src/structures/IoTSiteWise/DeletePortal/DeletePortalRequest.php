<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeletePortal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalId
 * @property string $clientToken
 */
class DeletePortalRequest extends Request
{
    /**
     * @param array{
     *     portalId: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
