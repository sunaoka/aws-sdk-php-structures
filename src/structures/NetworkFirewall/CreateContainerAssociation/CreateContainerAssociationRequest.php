<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateContainerAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContainerAssociationName
 * @property string|null $Description
 * @property 'ECS'|'EKS' $Type
 * @property list<Shapes\ContainerMonitoringConfiguration> $ContainerMonitoringConfigurations
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateContainerAssociationRequest extends Request
{
    /**
     * @param array{
     *     ContainerAssociationName: string,
     *     Description?: string|null,
     *     Type: 'ECS'|'EKS',
     *     ContainerMonitoringConfigurations: list<Shapes\ContainerMonitoringConfiguration>,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
