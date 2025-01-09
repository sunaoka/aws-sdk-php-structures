<?php

namespace Sunaoka\Aws\Structures\Greengrass\UpdateConnectivityInfo;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ConnectivityInfo> $ConnectivityInfo
 * @property string $ThingName
 */
class UpdateConnectivityInfoRequest extends Request
{
    /**
     * @param array{
     *     ConnectivityInfo?: list<Shapes\ConnectivityInfo>,
     *     ThingName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
