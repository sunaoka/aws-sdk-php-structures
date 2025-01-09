<?php

namespace Sunaoka\Aws\Structures\QApps\GetQAppSessionMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property bool $acceptResponses
 * @property bool $revealCards
 */
class SessionSharingConfiguration extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     acceptResponses?: bool,
     *     revealCards?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
