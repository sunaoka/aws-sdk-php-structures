<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateSecurityConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $configVersion
 * @property string|null $description
 * @property Shapes\UpdateIamIdentityCenterConfigOptions|null $iamIdentityCenterOptionsUpdates
 * @property string $id
 * @property Shapes\SamlConfigOptions|null $samlOptions
 */
class UpdateSecurityConfigRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     configVersion: string,
     *     description?: string|null,
     *     iamIdentityCenterOptionsUpdates?: Shapes\UpdateIamIdentityCenterConfigOptions|null,
     *     id: string,
     *     samlOptions?: Shapes\SamlConfigOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
