<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListCuratedEnvironmentImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEBIAN'|'AMAZON_LINUX'|'UBUNTU'|'WINDOWS_SERVER' $platform
 * @property list<EnvironmentLanguage> $languages
 */
class EnvironmentPlatform extends Shape
{
    /**
     * @param array{
     *     platform?: 'DEBIAN'|'AMAZON_LINUX'|'UBUNTU'|'WINDOWS_SERVER',
     *     languages?: list<EnvironmentLanguage>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
