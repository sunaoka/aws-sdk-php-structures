<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateWorkforce;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CognitoConfig|null $CognitoConfig
 * @property Shapes\OidcConfig|null $OidcConfig
 * @property Shapes\SourceIpConfig|null $SourceIpConfig
 * @property string $WorkforceName
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\WorkforceVpcConfigRequest|null $WorkforceVpcConfig
 */
class CreateWorkforceRequest extends Request
{
    /**
     * @param array{
     *     CognitoConfig?: Shapes\CognitoConfig|null,
     *     OidcConfig?: Shapes\OidcConfig|null,
     *     SourceIpConfig?: Shapes\SourceIpConfig|null,
     *     WorkforceName: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     WorkforceVpcConfig?: Shapes\WorkforceVpcConfigRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
