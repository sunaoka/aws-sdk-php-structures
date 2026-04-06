<?php

namespace Sunaoka\Aws\Structures\CodeStar\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ToolchainSource $source
 * @property string|null $roleArn
 * @property array<string, string>|null $stackParameters
 */
class Toolchain extends Shape
{
    /**
     * @param array{
     *     source: ToolchainSource,
     *     roleArn?: string|null,
     *     stackParameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
