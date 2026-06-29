<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendRcsMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RcsContent $Content
 * @property list<RcsSuggestedAction>|null $Suggestions
 */
class RcsMessageContent extends Shape
{
    /**
     * @param array{
     *     Content: RcsContent,
     *     Suggestions?: list<RcsSuggestedAction>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
