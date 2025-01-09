<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListCuratedEnvironmentImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JAVA'|'PYTHON'|'NODE_JS'|'RUBY'|'GOLANG'|'DOCKER'|'ANDROID'|'DOTNET'|'BASE'|'PHP' $language
 * @property list<EnvironmentImage> $images
 */
class EnvironmentLanguage extends Shape
{
    /**
     * @param array{
     *     language?: 'JAVA'|'PYTHON'|'NODE_JS'|'RUBY'|'GOLANG'|'DOCKER'|'ANDROID'|'DOTNET'|'BASE'|'PHP',
     *     images?: list<EnvironmentImage>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
