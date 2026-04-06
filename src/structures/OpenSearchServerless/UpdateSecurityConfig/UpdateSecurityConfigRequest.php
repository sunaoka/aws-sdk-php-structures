<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateSecurityConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $configVersion
 * @property string|null $description
 * @property Shapes\SamlConfigOptions|null $samlOptions
 * @property Shapes\UpdateIamIdentityCenterConfigOptions|null $iamIdentityCenterOptionsUpdates
 * @property Shapes\IamFederationConfigOptions|null $iamFederationOptions
 * @property string|null $clientToken
 */
class UpdateSecurityConfigRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     configVersion: string,
     *     description?: string|null,
     *     samlOptions?: Shapes\SamlConfigOptions|null,
     *     iamIdentityCenterOptionsUpdates?: Shapes\UpdateIamIdentityCenterConfigOptions|null,
     *     iamFederationOptions?: Shapes\IamFederationConfigOptions|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
