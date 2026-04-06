<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateSecurityConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $configVersion
 * @property int|null $createdDate
 * @property string|null $description
 * @property IamIdentityCenterConfigOptions|null $iamIdentityCenterOptions
 * @property string|null $id
 * @property int|null $lastModifiedDate
 * @property SamlConfigOptions|null $samlOptions
 * @property 'saml'|'iamidentitycenter'|null $type
 */
class SecurityConfigDetail extends Shape
{
    /**
     * @param array{
     *     configVersion?: string|null,
     *     createdDate?: int|null,
     *     description?: string|null,
     *     iamIdentityCenterOptions?: IamIdentityCenterConfigOptions|null,
     *     id?: string|null,
     *     lastModifiedDate?: int|null,
     *     samlOptions?: SamlConfigOptions|null,
     *     type?: 'saml'|'iamidentitycenter'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
