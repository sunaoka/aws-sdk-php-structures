<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteRouteSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string $RouteKey
 * @property string $StageName
 */
class DeleteRouteSettingsRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     RouteKey: string,
     *     StageName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
