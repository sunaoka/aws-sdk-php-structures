<?php

namespace Sunaoka\Aws\Structures\FSx\CreateDataRepositoryTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'EXPORT_TO_REPOSITORY'|'IMPORT_METADATA_FROM_REPOSITORY'|'RELEASE_DATA_FROM_FILESYSTEM'|'AUTO_RELEASE_DATA' $Type
 * @property list<string> $Paths
 * @property string $FileSystemId
 * @property Shapes\CompletionReport $Report
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag> $Tags
 * @property int $CapacityToRelease
 * @property Shapes\ReleaseConfiguration $ReleaseConfiguration
 */
class CreateDataRepositoryTaskRequest extends Request
{
    /**
     * @param array{
     *     Type: 'EXPORT_TO_REPOSITORY'|'IMPORT_METADATA_FROM_REPOSITORY'|'RELEASE_DATA_FROM_FILESYSTEM'|'AUTO_RELEASE_DATA',
     *     Paths?: list<string>,
     *     FileSystemId: string,
     *     Report: Shapes\CompletionReport,
     *     ClientRequestToken?: string,
     *     Tags?: list<Shapes\Tag>,
     *     CapacityToRelease?: int,
     *     ReleaseConfiguration?: Shapes\ReleaseConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
