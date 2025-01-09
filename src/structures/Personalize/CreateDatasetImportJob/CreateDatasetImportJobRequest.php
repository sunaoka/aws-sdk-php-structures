<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateDatasetImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobName
 * @property string $datasetArn
 * @property Shapes\DataSource $dataSource
 * @property string $roleArn
 * @property list<Shapes\Tag> $tags
 * @property 'FULL'|'INCREMENTAL' $importMode
 * @property bool $publishAttributionMetricsToS3
 */
class CreateDatasetImportJobRequest extends Request
{
    /**
     * @param array{
     *     jobName: string,
     *     datasetArn: string,
     *     dataSource: Shapes\DataSource,
     *     roleArn: string,
     *     tags?: list<Shapes\Tag>,
     *     importMode?: 'FULL'|'INCREMENTAL',
     *     publishAttributionMetricsToS3?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
