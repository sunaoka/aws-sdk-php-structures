<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateSecurityConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property 'saml'|'iamidentitycenter'|null $type
 * @property string|null $configVersion
 * @property string|null $description
 * @property SamlConfigOptions|null $samlOptions
 * @property IamIdentityCenterConfigOptions|null $iamIdentityCenterOptions
 * @property int|null $createdDate
 * @property int|null $lastModifiedDate
 */
class SecurityConfigDetail extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     type?: 'saml'|'iamidentitycenter'|null,
     *     configVersion?: string|null,
     *     description?: string|null,
     *     samlOptions?: SamlConfigOptions|null,
     *     iamIdentityCenterOptions?: IamIdentityCenterConfigOptions|null,
     *     createdDate?: int|null,
     *     lastModifiedDate?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
