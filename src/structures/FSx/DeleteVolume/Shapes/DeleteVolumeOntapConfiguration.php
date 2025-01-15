<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $SkipFinalBackup
 * @property list<Tag>|null $FinalBackupTags
 * @property bool|null $BypassSnaplockEnterpriseRetention
 */
class DeleteVolumeOntapConfiguration extends Shape
{
    /**
     * @param array{
     *     SkipFinalBackup?: bool|null,
     *     FinalBackupTags?: list<Tag>|null,
     *     BypassSnaplockEnterpriseRetention?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
