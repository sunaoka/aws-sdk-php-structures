<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\AssociateService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $serviceId
 * @property Shapes\ServiceConfiguration $configuration
 */
class AssociateServiceRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     serviceId: string,
     *     configuration: Shapes\ServiceConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
