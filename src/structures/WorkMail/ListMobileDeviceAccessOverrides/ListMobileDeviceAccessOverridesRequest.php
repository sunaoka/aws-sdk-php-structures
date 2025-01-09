<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListMobileDeviceAccessOverrides;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $UserId
 * @property string $DeviceId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListMobileDeviceAccessOverridesRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     UserId?: string,
     *     DeviceId?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
