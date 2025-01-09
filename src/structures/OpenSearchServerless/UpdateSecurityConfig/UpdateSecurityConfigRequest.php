<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateSecurityConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $configVersion
 * @property string $description
 * @property Shapes\UpdateIamIdentityCenterConfigOptions $iamIdentityCenterOptionsUpdates
 * @property string $id
 * @property Shapes\SamlConfigOptions $samlOptions
 */
class UpdateSecurityConfigRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     configVersion: string,
     *     description?: string,
     *     iamIdentityCenterOptionsUpdates?: Shapes\UpdateIamIdentityCenterConfigOptions,
     *     id: string,
     *     samlOptions?: Shapes\SamlConfigOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
