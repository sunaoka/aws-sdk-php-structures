<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateContainerService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceName
 * @property 'nano'|'micro'|'small'|'medium'|'large'|'xlarge' $power
 * @property int $scale
 * @property list<Shapes\Tag> $tags
 * @property array<string, list<string>> $publicDomainNames
 * @property Shapes\ContainerServiceDeploymentRequest $deployment
 * @property Shapes\PrivateRegistryAccessRequest $privateRegistryAccess
 */
class CreateContainerServiceRequest extends Request
{
    /**
     * @param array{
     *     serviceName: string,
     *     power: 'nano'|'micro'|'small'|'medium'|'large'|'xlarge',
     *     scale: int,
     *     tags?: list<Shapes\Tag>,
     *     publicDomainNames?: array<string, list<string>>,
     *     deployment?: Shapes\ContainerServiceDeploymentRequest,
     *     privateRegistryAccess?: Shapes\PrivateRegistryAccessRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
