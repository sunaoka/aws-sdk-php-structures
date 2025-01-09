<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\UpdateConnectivityInfo;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 * @property list<Shapes\ConnectivityInfo> $connectivityInfo
 */
class UpdateConnectivityInfoRequest extends Request
{
    /**
     * @param array{
     *     thingName: string,
     *     connectivityInfo: list<Shapes\ConnectivityInfo>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
