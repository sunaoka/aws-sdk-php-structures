<?php

namespace Sunaoka\Aws\Structures\Wickr\CreateNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkName
 * @property 'STANDARD'|'PREMIUM' $accessLevel
 * @property bool|null $enablePremiumFreeTrial
 * @property string|null $encryptionKeyArn
 */
class CreateNetworkRequest extends Request
{
    /**
     * @param array{
     *     networkName: string,
     *     accessLevel: 'STANDARD'|'PREMIUM',
     *     enablePremiumFreeTrial?: bool|null,
     *     encryptionKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
