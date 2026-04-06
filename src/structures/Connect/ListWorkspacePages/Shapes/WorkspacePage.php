<?php

namespace Sunaoka\Aws\Structures\Connect\ListWorkspacePages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceArn
 * @property string|null $Page
 * @property string|null $Slug
 * @property string|null $InputData
 */
class WorkspacePage extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string|null,
     *     Page?: string|null,
     *     Slug?: string|null,
     *     InputData?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
