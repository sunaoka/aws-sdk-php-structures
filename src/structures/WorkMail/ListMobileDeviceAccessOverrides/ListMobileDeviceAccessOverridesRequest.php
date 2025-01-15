<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListMobileDeviceAccessOverrides;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string|null $UserId
 * @property string|null $DeviceId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListMobileDeviceAccessOverridesRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     UserId?: string|null,
     *     DeviceId?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
