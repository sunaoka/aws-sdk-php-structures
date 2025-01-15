<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListCuratedEnvironmentImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEBIAN'|'AMAZON_LINUX'|'UBUNTU'|'WINDOWS_SERVER'|null $platform
 * @property list<EnvironmentLanguage>|null $languages
 */
class EnvironmentPlatform extends Shape
{
    /**
     * @param array{
     *     platform?: 'DEBIAN'|'AMAZON_LINUX'|'UBUNTU'|'WINDOWS_SERVER'|null,
     *     languages?: list<EnvironmentLanguage>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
