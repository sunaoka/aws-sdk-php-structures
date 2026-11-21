<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAccessControlApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $ApplicationId
 * @property string $Name
 * @property string|null $Description
 * @property string $Namespace
 * @property 'OIDC' $AuthenticationType
 * @property Shapes\IdpAuthorizingConfigInput $IdpAuthorizingConfiguration
 * @property Shapes\QuickAuthenticationConfigInput $QuickAuthenticationConfiguration
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateAccessControlApplicationRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     ApplicationId: string,
     *     Name: string,
     *     Description?: string|null,
     *     Namespace: string,
     *     AuthenticationType: 'OIDC',
     *     IdpAuthorizingConfiguration: Shapes\IdpAuthorizingConfigInput,
     *     QuickAuthenticationConfiguration: Shapes\QuickAuthenticationConfigInput,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
