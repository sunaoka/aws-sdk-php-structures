<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateNetworkResourceMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $ResourceArn
 * @property array<string, string> $Metadata
 */
class UpdateNetworkResourceMetadataRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     ResourceArn: string,
     *     Metadata: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
