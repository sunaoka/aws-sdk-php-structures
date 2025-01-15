<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\StartCodegenJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'es2020'|'esnext'|null $module
 * @property 'es2015'|'es2020'|null $target
 * @property 'jsx'|'tsx'|'js'|null $script
 * @property bool|null $renderTypeDeclarations
 * @property bool|null $inlineSourceMap
 * @property ApiConfiguration|null $apiConfiguration
 * @property array<string, string>|null $dependencies
 */
class ReactStartCodegenJobData extends Shape
{
    /**
     * @param array{
     *     module?: 'es2020'|'esnext'|null,
     *     target?: 'es2015'|'es2020'|null,
     *     script?: 'jsx'|'tsx'|'js'|null,
     *     renderTypeDeclarations?: bool|null,
     *     inlineSourceMap?: bool|null,
     *     apiConfiguration?: ApiConfiguration|null,
     *     dependencies?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
