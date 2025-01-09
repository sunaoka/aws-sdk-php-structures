<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileName
 * @property string $ProfileDescription
 * @property list<Shapes\ProfileQuestionUpdate> $ProfileQuestions
 * @property string $ClientRequestToken
 * @property array<string, string> $Tags
 */
class CreateProfileRequest extends Request
{
    /**
     * @param array{
     *     ProfileName: string,
     *     ProfileDescription: string,
     *     ProfileQuestions: list<Shapes\ProfileQuestionUpdate>,
     *     ClientRequestToken: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
