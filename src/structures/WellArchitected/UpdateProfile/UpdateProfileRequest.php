<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileArn
 * @property string|null $ProfileDescription
 * @property list<Shapes\ProfileQuestionUpdate>|null $ProfileQuestions
 */
class UpdateProfileRequest extends Request
{
    /**
     * @param array{
     *     ProfileArn: string,
     *     ProfileDescription?: string|null,
     *     ProfileQuestions?: list<Shapes\ProfileQuestionUpdate>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
