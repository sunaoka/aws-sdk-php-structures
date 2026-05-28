<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $credentialArn
 * @property string|null $username
 */
class HarnessSkillGitAuth extends Shape
{
    /**
     * @param array{
     *     credentialArn: string,
     *     username?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
