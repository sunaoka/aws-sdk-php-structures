<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\RegisterSubscriptionProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretArn
 * @property 'RedHat' $SubscriptionProviderSource
 * @property array<string, string> $Tags
 */
class RegisterSubscriptionProviderRequest extends Request
{
    /**
     * @param array{
     *     SecretArn: string,
     *     SubscriptionProviderSource: 'RedHat',
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
