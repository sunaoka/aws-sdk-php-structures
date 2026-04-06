<?php

namespace Sunaoka\Aws\Structures\MailManager\ListArchives\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ArchiveId
 * @property string|null $ArchiveName
 * @property 'ACTIVE'|'PENDING_DELETION'|null $ArchiveState
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 */
class Archive extends Shape
{
    /**
     * @param array{
     *     ArchiveId: string,
     *     ArchiveName?: string|null,
     *     ArchiveState?: 'ACTIVE'|'PENDING_DELETION'|null,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
