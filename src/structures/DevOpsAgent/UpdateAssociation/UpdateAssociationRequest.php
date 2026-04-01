<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $associationId
 * @property Shapes\ServiceConfiguration $configuration
 */
class UpdateAssociationRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     associationId: string,
     *     configuration: Shapes\ServiceConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
