<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileArn
 * @property string $ProfileDescription
 * @property list<Shapes\ProfileQuestionUpdate> $ProfileQuestions
 */
class UpdateProfileRequest extends Request
{
    /**
     * @param array{
     *     ProfileArn: string,
     *     ProfileDescription?: string,
     *     ProfileQuestions?: list<Shapes\ProfileQuestionUpdate>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
