<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\CopyBackupToRegion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DestinationRegion
 * @property string $BackupId
 * @property list<Shapes\Tag>|null $TagList
 */
class CopyBackupToRegionRequest extends Request
{
    /**
     * @param array{
     *     DestinationRegion: string,
     *     BackupId: string,
     *     TagList?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
