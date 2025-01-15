<?php

namespace Sunaoka\Aws\Structures\FSx\CreateBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $FileSystemId
 * @property string|null $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $VolumeId
 */
class CreateBackupRequest extends Request
{
    /**
     * @param array{
     *     FileSystemId?: string|null,
     *     ClientRequestToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     VolumeId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
