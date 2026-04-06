<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateSecurityConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'saml'|'iamidentitycenter'|'iamfederation' $type
 * @property string $name
 * @property string|null $description
 * @property Shapes\SamlConfigOptions|null $samlOptions
 * @property Shapes\CreateIamIdentityCenterConfigOptions|null $iamIdentityCenterOptions
 * @property Shapes\IamFederationConfigOptions|null $iamFederationOptions
 * @property string|null $clientToken
 */
class CreateSecurityConfigRequest extends Request
{
    /**
     * @param array{
     *     type: 'saml'|'iamidentitycenter'|'iamfederation',
     *     name: string,
     *     description?: string|null,
     *     samlOptions?: Shapes\SamlConfigOptions|null,
     *     iamIdentityCenterOptions?: Shapes\CreateIamIdentityCenterConfigOptions|null,
     *     iamFederationOptions?: Shapes\IamFederationConfigOptions|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
