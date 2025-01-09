<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetChatControlsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $blockedPhrases
 * @property string $systemMessageOverride
 */
class BlockedPhrasesConfiguration extends Shape
{
    /**
     * @param array{
     *     blockedPhrases?: list<string>,
     *     systemMessageOverride?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
