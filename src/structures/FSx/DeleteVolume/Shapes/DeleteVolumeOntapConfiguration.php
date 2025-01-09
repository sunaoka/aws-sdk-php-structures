<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $SkipFinalBackup
 * @property list<Tag> $FinalBackupTags
 * @property bool $BypassSnaplockEnterpriseRetention
 */
class DeleteVolumeOntapConfiguration extends Shape
{
    /**
     * @param array{
     *     SkipFinalBackup?: bool,
     *     FinalBackupTags?: list<Tag>,
     *     BypassSnaplockEnterpriseRetention?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
