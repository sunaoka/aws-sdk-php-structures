<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetChatControlsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $blockedPhrases
 * @property string|null $systemMessageOverride
 */
class BlockedPhrasesConfiguration extends Shape
{
    /**
     * @param array{
     *     blockedPhrases?: list<string>|null,
     *     systemMessageOverride?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
