<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateDatasetImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobName
 * @property string $datasetArn
 * @property Shapes\DataSource $dataSource
 * @property string $roleArn
 * @property list<Shapes\Tag>|null $tags
 * @property 'FULL'|'INCREMENTAL'|null $importMode
 * @property bool|null $publishAttributionMetricsToS3
 */
class CreateDatasetImportJobRequest extends Request
{
    /**
     * @param array{
     *     jobName: string,
     *     datasetArn: string,
     *     dataSource: Shapes\DataSource,
     *     roleArn: string,
     *     tags?: list<Shapes\Tag>|null,
     *     importMode?: 'FULL'|'INCREMENTAL'|null,
     *     publishAttributionMetricsToS3?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
