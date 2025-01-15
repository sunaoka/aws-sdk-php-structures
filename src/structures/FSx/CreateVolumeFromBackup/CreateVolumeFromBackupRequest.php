<?php

namespace Sunaoka\Aws\Structures\FSx\CreateVolumeFromBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupId
 * @property string|null $ClientRequestToken
 * @property string $Name
 * @property Shapes\CreateOntapVolumeConfiguration|null $OntapConfiguration
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateVolumeFromBackupRequest extends Request
{
    /**
     * @param array{
     *     BackupId: string,
     *     ClientRequestToken?: string|null,
     *     Name: string,
     *     OntapConfiguration?: Shapes\CreateOntapVolumeConfiguration|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
