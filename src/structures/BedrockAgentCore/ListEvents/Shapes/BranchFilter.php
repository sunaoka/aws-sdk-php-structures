<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property bool|null $includeParentBranches
 */
class BranchFilter extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     includeParentBranches?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
