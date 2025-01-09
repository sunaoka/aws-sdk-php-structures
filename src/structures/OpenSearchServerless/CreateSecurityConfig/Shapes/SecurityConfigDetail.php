<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateSecurityConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $configVersion
 * @property int $createdDate
 * @property string $description
 * @property IamIdentityCenterConfigOptions $iamIdentityCenterOptions
 * @property string $id
 * @property int $lastModifiedDate
 * @property SamlConfigOptions $samlOptions
 * @property 'saml'|'iamidentitycenter' $type
 */
class SecurityConfigDetail extends Shape
{
    /**
     * @param array{
     *     configVersion?: string,
     *     createdDate?: int,
     *     description?: string,
     *     iamIdentityCenterOptions?: IamIdentityCenterConfigOptions,
     *     id?: string,
     *     lastModifiedDate?: int,
     *     samlOptions?: SamlConfigOptions,
     *     type?: 'saml'|'iamidentitycenter'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
