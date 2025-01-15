<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateDataDeletionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobName
 * @property string $datasetGroupArn
 * @property Shapes\DataSource $dataSource
 * @property string $roleArn
 * @property list<Shapes\Tag>|null $tags
 */
class CreateDataDeletionJobRequest extends Request
{
    /**
     * @param array{
     *     jobName: string,
     *     datasetGroupArn: string,
     *     dataSource: Shapes\DataSource,
     *     roleArn: string,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
