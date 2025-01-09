<?php

namespace Sunaoka\Aws\Structures\FSx\CreateVolumeFromBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupId
 * @property string $ClientRequestToken
 * @property string $Name
 * @property Shapes\CreateOntapVolumeConfiguration $OntapConfiguration
 * @property list<Shapes\Tag> $Tags
 */
class CreateVolumeFromBackupRequest extends Request
{
    /**
     * @param array{
     *     BackupId: string,
     *     ClientRequestToken?: string,
     *     Name: string,
     *     OntapConfiguration?: Shapes\CreateOntapVolumeConfiguration,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
