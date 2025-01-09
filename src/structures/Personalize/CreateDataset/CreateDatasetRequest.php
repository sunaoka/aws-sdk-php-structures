<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $schemaArn
 * @property string $datasetGroupArn
 * @property string $datasetType
 * @property list<Shapes\Tag> $tags
 */
class CreateDatasetRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     schemaArn: string,
     *     datasetGroupArn: string,
     *     datasetType: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
