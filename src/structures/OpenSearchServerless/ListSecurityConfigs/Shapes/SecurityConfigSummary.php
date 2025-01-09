<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListSecurityConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $configVersion
 * @property int $createdDate
 * @property string $description
 * @property string $id
 * @property int $lastModifiedDate
 * @property 'saml'|'iamidentitycenter' $type
 */
class SecurityConfigSummary extends Shape
{
    /**
     * @param array{
     *     configVersion?: string,
     *     createdDate?: int,
     *     description?: string,
     *     id?: string,
     *     lastModifiedDate?: int,
     *     type?: 'saml'|'iamidentitycenter'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
