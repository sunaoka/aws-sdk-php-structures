<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FinalBackupId
 * @property list<Tag> $FinalBackupTags
 */
class DeleteVolumeOntapResponse extends Shape
{
    /**
     * @param array{
     *     FinalBackupId?: string,
     *     FinalBackupTags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
