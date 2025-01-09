<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DatasetSource $DatasetSource
 * @property 'TRAIN'|'TEST' $DatasetType
 * @property string $ProjectArn
 * @property array<string, string> $Tags
 */
class CreateDatasetRequest extends Request
{
    /**
     * @param array{
     *     DatasetSource?: Shapes\DatasetSource,
     *     DatasetType: 'TRAIN'|'TEST',
     *     ProjectArn: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
