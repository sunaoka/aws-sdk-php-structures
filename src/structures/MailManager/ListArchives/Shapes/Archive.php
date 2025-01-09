<?php

namespace Sunaoka\Aws\Structures\MailManager\ListArchives\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ArchiveId
 * @property string $ArchiveName
 * @property 'ACTIVE'|'PENDING_DELETION' $ArchiveState
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimestamp
 */
class Archive extends Shape
{
    /**
     * @param array{
     *     ArchiveId: string,
     *     ArchiveName?: string,
     *     ArchiveState?: 'ACTIVE'|'PENDING_DELETION',
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
