<?php

namespace Sunaoka\Aws\Structures\RTBFabric\UpdateLinkModuleFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $gatewayId
 * @property string $linkId
 * @property list<Shapes\ModuleConfiguration> $modules
 */
class UpdateLinkModuleFlowRequest extends Request
{
    /**
     * @param array{
     *     clientToken: string,
     *     gatewayId: string,
     *     linkId: string,
     *     modules: list<Shapes\ModuleConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
