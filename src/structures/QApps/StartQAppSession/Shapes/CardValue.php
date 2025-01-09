<?php

namespace Sunaoka\Aws\Structures\QApps\StartQAppSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cardId
 * @property string $value
 * @property SubmissionMutation $submissionMutation
 */
class CardValue extends Shape
{
    /**
     * @param array{
     *     cardId: string,
     *     value: string,
     *     submissionMutation?: SubmissionMutation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
