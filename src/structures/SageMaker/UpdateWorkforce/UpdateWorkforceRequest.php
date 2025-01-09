<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateWorkforce;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkforceName
 * @property Shapes\SourceIpConfig $SourceIpConfig
 * @property Shapes\OidcConfig $OidcConfig
 * @property Shapes\WorkforceVpcConfigRequest $WorkforceVpcConfig
 */
class UpdateWorkforceRequest extends Request
{
    /**
     * @param array{
     *     WorkforceName: string,
     *     SourceIpConfig?: Shapes\SourceIpConfig,
     *     OidcConfig?: Shapes\OidcConfig,
     *     WorkforceVpcConfig?: Shapes\WorkforceVpcConfigRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
