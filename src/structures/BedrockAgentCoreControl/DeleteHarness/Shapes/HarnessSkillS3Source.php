<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $uri
 */
class HarnessSkillS3Source extends Shape
{
    /**
     * @param array{uri: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
