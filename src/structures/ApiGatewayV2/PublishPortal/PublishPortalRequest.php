<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\PublishPortal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string $PortalId
 */
class PublishPortalRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     PortalId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
