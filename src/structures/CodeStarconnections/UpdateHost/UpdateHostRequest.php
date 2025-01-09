<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\UpdateHost;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostArn
 * @property string $ProviderEndpoint
 * @property Shapes\VpcConfiguration $VpcConfiguration
 */
class UpdateHostRequest extends Request
{
    /**
     * @param array{
     *     HostArn: string,
     *     ProviderEndpoint?: string,
     *     VpcConfiguration?: Shapes\VpcConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
