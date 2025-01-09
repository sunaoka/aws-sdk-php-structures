<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateDatasetExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobName
 * @property string $datasetArn
 * @property 'BULK'|'PUT'|'ALL' $ingestionMode
 * @property string $roleArn
 * @property Shapes\DatasetExportJobOutput $jobOutput
 * @property list<Shapes\Tag> $tags
 */
class CreateDatasetExportJobRequest extends Request
{
    /**
     * @param array{
     *     jobName: string,
     *     datasetArn: string,
     *     ingestionMode?: 'BULK'|'PUT'|'ALL',
     *     roleArn: string,
     *     jobOutput: Shapes\DatasetExportJobOutput,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
