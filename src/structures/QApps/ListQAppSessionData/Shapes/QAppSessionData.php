<?php

namespace Sunaoka\Aws\Structures\QApps\ListQAppSessionData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cardId
 * @property Document $value
 * @property User $user
 * @property string $submissionId
 * @property \Aws\Api\DateTimeResult $timestamp
 */
class QAppSessionData extends Shape
{
    /**
     * @param array{
     *     cardId: string,
     *     value?: Document,
     *     user: User,
     *     submissionId?: string,
     *     timestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
