<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateContainerService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceName
 * @property 'nano'|'micro'|'small'|'medium'|'large'|'xlarge' $power
 * @property int<1, 20> $scale
 * @property list<Shapes\Tag>|null $tags
 * @property array<string, list<string>>|null $publicDomainNames
 * @property Shapes\ContainerServiceDeploymentRequest|null $deployment
 * @property Shapes\PrivateRegistryAccessRequest|null $privateRegistryAccess
 */
class CreateContainerServiceRequest extends Request
{
    /**
     * @param array{
     *     serviceName: string,
     *     power: 'nano'|'micro'|'small'|'medium'|'large'|'xlarge',
     *     scale: int<1, 20>,
     *     tags?: list<Shapes\Tag>|null,
     *     publicDomainNames?: array<string, list<string>>|null,
     *     deployment?: Shapes\ContainerServiceDeploymentRequest|null,
     *     privateRegistryAccess?: Shapes\PrivateRegistryAccessRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
