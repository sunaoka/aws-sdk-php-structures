<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED'|'ENABLED_WITH_DIRECTORY_LOGIN_FALLBACK' $Status
 * @property string $UserAccessUrl
 * @property string $RelayStateParameterName
 */
class SamlProperties extends Shape
{
    /**
     * @param array{
     *     Status?: 'DISABLED'|'ENABLED'|'ENABLED_WITH_DIRECTORY_LOGIN_FALLBACK',
     *     UserAccessUrl?: string,
     *     RelayStateParameterName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
