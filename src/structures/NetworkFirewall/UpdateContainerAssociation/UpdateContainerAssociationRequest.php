<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateContainerAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ContainerAssociationName
 * @property string|null $ContainerAssociationArn
 * @property string|null $Description
 * @property 'ECS'|'EKS' $Type
 * @property list<Shapes\ContainerMonitoringConfiguration> $ContainerMonitoringConfigurations
 * @property list<Shapes\Tag>|null $Tags
 * @property string $UpdateToken
 */
class UpdateContainerAssociationRequest extends Request
{
    /**
     * @param array{
     *     ContainerAssociationName?: string|null,
     *     ContainerAssociationArn?: string|null,
     *     Description?: string|null,
     *     Type: 'ECS'|'EKS',
     *     ContainerMonitoringConfigurations: list<Shapes\ContainerMonitoringConfiguration>,
     *     Tags?: list<Shapes\Tag>|null,
     *     UpdateToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
