<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\UpdateHost;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostArn
 * @property string|null $ProviderEndpoint
 * @property Shapes\VpcConfiguration|null $VpcConfiguration
 */
class UpdateHostRequest extends Request
{
    /**
     * @param array{
     *     HostArn: string,
     *     ProviderEndpoint?: string|null,
     *     VpcConfiguration?: Shapes\VpcConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
