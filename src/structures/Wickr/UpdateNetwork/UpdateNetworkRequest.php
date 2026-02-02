<?php

namespace Sunaoka\Aws\Structures\Wickr\UpdateNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 * @property string $networkName
 * @property string|null $clientToken
 * @property string|null $encryptionKeyArn
 */
class UpdateNetworkRequest extends Request
{
    /**
     * @param array{
     *     networkId: string,
     *     networkName: string,
     *     clientToken?: string|null,
     *     encryptionKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
