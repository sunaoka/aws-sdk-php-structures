<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateWorkforce;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CognitoConfig $CognitoConfig
 * @property Shapes\OidcConfig $OidcConfig
 * @property Shapes\SourceIpConfig $SourceIpConfig
 * @property string $WorkforceName
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\WorkforceVpcConfigRequest $WorkforceVpcConfig
 */
class CreateWorkforceRequest extends Request
{
    /**
     * @param array{
     *     CognitoConfig?: Shapes\CognitoConfig,
     *     OidcConfig?: Shapes\OidcConfig,
     *     SourceIpConfig?: Shapes\SourceIpConfig,
     *     WorkforceName: string,
     *     Tags?: list<Shapes\Tag>,
     *     WorkforceVpcConfig?: Shapes\WorkforceVpcConfigRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
