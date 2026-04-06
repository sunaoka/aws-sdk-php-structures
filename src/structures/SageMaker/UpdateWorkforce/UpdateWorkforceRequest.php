<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateWorkforce;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkforceName
 * @property Shapes\SourceIpConfig|null $SourceIpConfig
 * @property Shapes\OidcConfig|null $OidcConfig
 * @property Shapes\WorkforceVpcConfigRequest|null $WorkforceVpcConfig
 * @property 'ipv4'|'dualstack'|null $IpAddressType
 */
class UpdateWorkforceRequest extends Request
{
    /**
     * @param array{
     *     WorkforceName: string,
     *     SourceIpConfig?: Shapes\SourceIpConfig|null,
     *     OidcConfig?: Shapes\OidcConfig|null,
     *     WorkforceVpcConfig?: Shapes\WorkforceVpcConfigRequest|null,
     *     IpAddressType?: 'ipv4'|'dualstack'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
