<?php

namespace Sunaoka\Aws\Structures\QApps\ListQAppSessionData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cardId
 * @property Document|null $value
 * @property User $user
 * @property string|null $submissionId
 * @property \Aws\Api\DateTimeResult|null $timestamp
 */
class QAppSessionData extends Shape
{
    /**
     * @param array{
     *     cardId: string,
     *     value?: Document|null,
     *     user: User,
     *     submissionId?: string|null,
     *     timestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
