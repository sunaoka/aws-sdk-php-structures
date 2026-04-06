<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\ListRegisteredSubscriptionProviders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property list<'RedHat'>|null $SubscriptionProviderSources
 */
class ListRegisteredSubscriptionProvidersRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     SubscriptionProviderSources?: list<'RedHat'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
