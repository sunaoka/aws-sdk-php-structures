<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateSecurityConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $description
 * @property Shapes\CreateIamIdentityCenterConfigOptions|null $iamIdentityCenterOptions
 * @property string $name
 * @property Shapes\SamlConfigOptions|null $samlOptions
 * @property 'saml'|'iamidentitycenter' $type
 */
class CreateSecurityConfigRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     description?: string|null,
     *     iamIdentityCenterOptions?: Shapes\CreateIamIdentityCenterConfigOptions|null,
     *     name: string,
     *     samlOptions?: Shapes\SamlConfigOptions|null,
     *     type: 'saml'|'iamidentitycenter'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
