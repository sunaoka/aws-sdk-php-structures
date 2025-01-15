<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAnswer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property string $LensAlias
 * @property string $QuestionId
 * @property int<1, 100>|null $MilestoneNumber
 */
class GetAnswerRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     LensAlias: string,
     *     QuestionId: string,
     *     MilestoneNumber?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
