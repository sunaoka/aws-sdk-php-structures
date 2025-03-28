<?php

namespace Sunaoka\Aws\Structures\QApps\UpdateQAppSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cardId
 * @property string $value
 * @property SubmissionMutation|null $submissionMutation
 */
class CardValue extends Shape
{
    /**
     * @param array{
     *     cardId: string,
     *     value: string,
     *     submissionMutation?: SubmissionMutation|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
