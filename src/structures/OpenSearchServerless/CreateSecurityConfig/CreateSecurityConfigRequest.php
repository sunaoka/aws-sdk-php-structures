<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateSecurityConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property Shapes\CreateIamIdentityCenterConfigOptions $iamIdentityCenterOptions
 * @property string $name
 * @property Shapes\SamlConfigOptions $samlOptions
 * @property 'saml'|'iamidentitycenter' $type
 */
class CreateSecurityConfigRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     iamIdentityCenterOptions?: Shapes\CreateIamIdentityCenterConfigOptions,
     *     name: string,
     *     samlOptions?: Shapes\SamlConfigOptions,
     *     type: 'saml'|'iamidentitycenter'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
