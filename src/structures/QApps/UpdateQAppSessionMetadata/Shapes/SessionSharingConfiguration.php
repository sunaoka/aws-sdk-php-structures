<?php

namespace Sunaoka\Aws\Structures\QApps\UpdateQAppSessionMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property bool|null $acceptResponses
 * @property bool|null $revealCards
 */
class SessionSharingConfiguration extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     acceptResponses?: bool|null,
     *     revealCards?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
