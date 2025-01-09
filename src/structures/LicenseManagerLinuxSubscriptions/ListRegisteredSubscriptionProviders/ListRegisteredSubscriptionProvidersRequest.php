<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\ListRegisteredSubscriptionProviders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property list<'RedHat'> $SubscriptionProviderSources
 */
class ListRegisteredSubscriptionProvidersRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string,
     *     SubscriptionProviderSources?: list<'RedHat'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
