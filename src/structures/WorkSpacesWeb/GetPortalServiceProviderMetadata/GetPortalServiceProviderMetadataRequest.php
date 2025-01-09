<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetPortalServiceProviderMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalArn
 */
class GetPortalServiceProviderMetadataRequest extends Request
{
    /**
     * @param array{portalArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
