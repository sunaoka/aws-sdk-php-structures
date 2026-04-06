<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateWorkforce;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkforceName
 * @property Shapes\SourceIpConfig|null $SourceIpConfig
 * @property Shapes\OidcConfig|null $OidcConfig
 * @property Shapes\WorkforceVpcConfigRequest|null $WorkforceVpcConfig
 */
class UpdateWorkforceRequest extends Request
{
    /**
     * @param array{
     *     WorkforceName: string,
     *     SourceIpConfig?: Shapes\SourceIpConfig|null,
     *     OidcConfig?: Shapes\OidcConfig|null,
     *     WorkforceVpcConfig?: Shapes\WorkforceVpcConfigRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
