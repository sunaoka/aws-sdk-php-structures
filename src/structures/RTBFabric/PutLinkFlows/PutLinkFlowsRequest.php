<?php

namespace Sunaoka\Aws\Structures\RTBFabric\PutLinkFlows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayId
 * @property string $linkId
 * @property string|null $clientToken
 * @property string $lockToken
 * @property list<Shapes\Flow> $flows
 */
class PutLinkFlowsRequest extends Request
{
    /**
     * @param array{
     *     gatewayId: string,
     *     linkId: string,
     *     clientToken?: string|null,
     *     lockToken: string,
     *     flows: list<Shapes\Flow>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
