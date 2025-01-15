<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateDatasetExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobName
 * @property string $datasetArn
 * @property 'BULK'|'PUT'|'ALL'|null $ingestionMode
 * @property string $roleArn
 * @property Shapes\DatasetExportJobOutput $jobOutput
 * @property list<Shapes\Tag>|null $tags
 */
class CreateDatasetExportJobRequest extends Request
{
    /**
     * @param array{
     *     jobName: string,
     *     datasetArn: string,
     *     ingestionMode?: 'BULK'|'PUT'|'ALL'|null,
     *     roleArn: string,
     *     jobOutput: Shapes\DatasetExportJobOutput,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
