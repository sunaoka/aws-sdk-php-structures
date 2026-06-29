<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendRcsMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Title
 * @property string|null $Description
 * @property RcsCardMedia|null $Media
 * @property list<RcsSuggestedAction>|null $Suggestions
 */
class RcsCardContent extends Shape
{
    /**
     * @param array{
     *     Title?: string|null,
     *     Description?: string|null,
     *     Media?: RcsCardMedia|null,
     *     Suggestions?: list<RcsSuggestedAction>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
