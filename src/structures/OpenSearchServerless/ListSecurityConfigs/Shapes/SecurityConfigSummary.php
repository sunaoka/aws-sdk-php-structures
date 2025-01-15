<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListSecurityConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $configVersion
 * @property int|null $createdDate
 * @property string|null $description
 * @property string|null $id
 * @property int|null $lastModifiedDate
 * @property 'saml'|'iamidentitycenter'|null $type
 */
class SecurityConfigSummary extends Shape
{
    /**
     * @param array{
     *     configVersion?: string|null,
     *     createdDate?: int|null,
     *     description?: string|null,
     *     id?: string|null,
     *     lastModifiedDate?: int|null,
     *     type?: 'saml'|'iamidentitycenter'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
