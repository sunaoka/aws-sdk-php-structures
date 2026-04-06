<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DatasetSource|null $DatasetSource
 * @property 'TRAIN'|'TEST' $DatasetType
 * @property string $ProjectArn
 * @property array<string, string>|null $Tags
 */
class CreateDatasetRequest extends Request
{
    /**
     * @param array{
     *     DatasetSource?: Shapes\DatasetSource|null,
     *     DatasetType: 'TRAIN'|'TEST',
     *     ProjectArn: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
