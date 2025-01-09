<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\StartCodegenJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'es2020'|'esnext' $module
 * @property 'es2015'|'es2020' $target
 * @property 'jsx'|'tsx'|'js' $script
 * @property bool $renderTypeDeclarations
 * @property bool $inlineSourceMap
 * @property ApiConfiguration $apiConfiguration
 * @property array<string, string> $dependencies
 */
class ReactStartCodegenJobData extends Shape
{
    /**
     * @param array{
     *     module?: 'es2020'|'esnext',
     *     target?: 'es2015'|'es2020',
     *     script?: 'jsx'|'tsx'|'js',
     *     renderTypeDeclarations?: bool,
     *     inlineSourceMap?: bool,
     *     apiConfiguration?: ApiConfiguration,
     *     dependencies?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
