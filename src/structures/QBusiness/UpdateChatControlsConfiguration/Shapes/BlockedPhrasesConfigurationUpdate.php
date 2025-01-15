<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateChatControlsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $blockedPhrasesToCreateOrUpdate
 * @property list<string>|null $blockedPhrasesToDelete
 * @property string|null $systemMessageOverride
 */
class BlockedPhrasesConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     blockedPhrasesToCreateOrUpdate?: list<string>|null,
     *     blockedPhrasesToDelete?: list<string>|null,
     *     systemMessageOverride?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
