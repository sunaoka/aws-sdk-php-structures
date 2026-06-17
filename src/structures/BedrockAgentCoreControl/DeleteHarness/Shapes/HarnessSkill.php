<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $path
 * @property HarnessSkillS3Source|null $s3
 * @property HarnessSkillGitSource|null $git
 * @property HarnessSkillAwsSkillsSource|null $awsSkills
 */
class HarnessSkill extends Shape
{
    /**
     * @param array{
     *     path?: string|null,
     *     s3?: HarnessSkillS3Source|null,
     *     git?: HarnessSkillGitSource|null,
     *     awsSkills?: HarnessSkillAwsSkillsSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
