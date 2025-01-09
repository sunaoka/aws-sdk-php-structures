<?php

namespace Sunaoka\Aws\Structures\Personalize\UpdateDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetArn
 * @property string $schemaArn
 */
class UpdateDatasetRequest extends Request
{
    /**
     * @param array{
     *     datasetArn: string,
     *     schemaArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
