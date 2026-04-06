<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListCoreNetworkRoutingInformation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Prefix
 * @property RoutingInformationNextHop|null $NextHop
 * @property string|null $LocalPreference
 * @property string|null $Med
 * @property list<string>|null $AsPath
 * @property list<string>|null $Communities
 */
class CoreNetworkRoutingInformation extends Shape
{
    /**
     * @param array{
     *     Prefix?: string|null,
     *     NextHop?: RoutingInformationNextHop|null,
     *     LocalPreference?: string|null,
     *     Med?: string|null,
     *     AsPath?: list<string>|null,
     *     Communities?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
