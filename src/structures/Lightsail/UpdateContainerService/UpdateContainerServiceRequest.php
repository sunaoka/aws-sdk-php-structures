<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateContainerService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceName
 * @property 'nano'|'micro'|'small'|'medium'|'large'|'xlarge'|null $power
 * @property int<1, 20>|null $scale
 * @property bool|null $isDisabled
 * @property array<string, list<string>>|null $publicDomainNames
 * @property Shapes\PrivateRegistryAccessRequest|null $privateRegistryAccess
 */
class UpdateContainerServiceRequest extends Request
{
    /**
     * @param array{
     *     serviceName: string,
     *     power?: 'nano'|'micro'|'small'|'medium'|'large'|'xlarge'|null,
     *     scale?: int<1, 20>|null,
     *     isDisabled?: bool|null,
     *     publicDomainNames?: array<string, list<string>>|null,
     *     privateRegistryAccess?: Shapes\PrivateRegistryAccessRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
