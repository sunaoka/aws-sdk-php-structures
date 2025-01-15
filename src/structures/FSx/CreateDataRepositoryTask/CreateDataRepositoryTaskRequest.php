<?php

namespace Sunaoka\Aws\Structures\FSx\CreateDataRepositoryTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'EXPORT_TO_REPOSITORY'|'IMPORT_METADATA_FROM_REPOSITORY'|'RELEASE_DATA_FROM_FILESYSTEM'|'AUTO_RELEASE_DATA' $Type
 * @property list<string>|null $Paths
 * @property string $FileSystemId
 * @property Shapes\CompletionReport $Report
 * @property string|null $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 * @property int<1, 2147483647>|null $CapacityToRelease
 * @property Shapes\ReleaseConfiguration|null $ReleaseConfiguration
 */
class CreateDataRepositoryTaskRequest extends Request
{
    /**
     * @param array{
     *     Type: 'EXPORT_TO_REPOSITORY'|'IMPORT_METADATA_FROM_REPOSITORY'|'RELEASE_DATA_FROM_FILESYSTEM'|'AUTO_RELEASE_DATA',
     *     Paths?: list<string>|null,
     *     FileSystemId: string,
     *     Report: Shapes\CompletionReport,
     *     ClientRequestToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     CapacityToRelease?: int<1, 2147483647>|null,
     *     ReleaseConfiguration?: Shapes\ReleaseConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
