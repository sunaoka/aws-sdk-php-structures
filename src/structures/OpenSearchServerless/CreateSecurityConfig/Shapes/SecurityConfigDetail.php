<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateSecurityConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $configVersion
 * @property int|null $createdDate
 * @property string|null $description
 * @property string|null $id
 * @property int|null $lastModifiedDate
 * @property SamlConfigOptions|null $samlOptions
 * @property 'saml'|null $type
 */
class SecurityConfigDetail extends Shape
{
    /**
     * @param array{
     *     configVersion?: string|null,
     *     createdDate?: int|null,
     *     description?: string|null,
     *     id?: string|null,
     *     lastModifiedDate?: int|null,
     *     samlOptions?: SamlConfigOptions|null,
     *     type?: 'saml'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
