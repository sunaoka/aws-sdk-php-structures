<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifySamlProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED'|'ENABLED_WITH_DIRECTORY_LOGIN_FALLBACK'|null $Status
 * @property string|null $UserAccessUrl
 * @property string|null $RelayStateParameterName
 */
class SamlProperties extends Shape
{
    /**
     * @param array{
     *     Status?: 'DISABLED'|'ENABLED'|'ENABLED_WITH_DIRECTORY_LOGIN_FALLBACK'|null,
     *     UserAccessUrl?: string|null,
     *     RelayStateParameterName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
