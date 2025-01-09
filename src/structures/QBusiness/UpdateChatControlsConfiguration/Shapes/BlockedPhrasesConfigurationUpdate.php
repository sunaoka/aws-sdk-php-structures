<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateChatControlsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $blockedPhrasesToCreateOrUpdate
 * @property list<string> $blockedPhrasesToDelete
 * @property string $systemMessageOverride
 */
class BlockedPhrasesConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     blockedPhrasesToCreateOrUpdate?: list<string>,
     *     blockedPhrasesToDelete?: list<string>,
     *     systemMessageOverride?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
