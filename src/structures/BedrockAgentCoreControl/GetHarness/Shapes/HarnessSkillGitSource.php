<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $url
 * @property string|null $path
 * @property HarnessSkillGitAuth|null $auth
 */
class HarnessSkillGitSource extends Shape
{
    /**
     * @param array{
     *     url: string,
     *     path?: string|null,
     *     auth?: HarnessSkillGitAuth|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
