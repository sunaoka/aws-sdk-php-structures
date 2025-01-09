<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateContainerService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceName
 * @property 'nano'|'micro'|'small'|'medium'|'large'|'xlarge' $power
 * @property int $scale
 * @property bool $isDisabled
 * @property array<string, list<string>> $publicDomainNames
 * @property Shapes\PrivateRegistryAccessRequest $privateRegistryAccess
 */
class UpdateContainerServiceRequest extends Request
{
    /**
     * @param array{
     *     serviceName: string,
     *     power?: 'nano'|'micro'|'small'|'medium'|'large'|'xlarge',
     *     scale?: int,
     *     isDisabled?: bool,
     *     publicDomainNames?: array<string, list<string>>,
     *     privateRegistryAccess?: Shapes\PrivateRegistryAccessRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
