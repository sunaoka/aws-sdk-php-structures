<?php

namespace Sunaoka\Aws\Structures\DirectoryService\UpdateSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property list<Shapes\Setting> $Settings
 */
class UpdateSettingsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     Settings: list<Shapes\Setting>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
