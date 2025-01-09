<?php

namespace Sunaoka\Aws\Structures\FSx\CreateBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileSystemId
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag> $Tags
 * @property string $VolumeId
 */
class CreateBackupRequest extends Request
{
    /**
     * @param array{
     *     FileSystemId?: string,
     *     ClientRequestToken?: string,
     *     Tags?: list<Shapes\Tag>,
     *     VolumeId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
