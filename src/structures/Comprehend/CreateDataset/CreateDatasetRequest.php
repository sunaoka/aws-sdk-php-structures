<?php

namespace Sunaoka\Aws\Structures\Comprehend\CreateDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlywheelArn
 * @property string $DatasetName
 * @property 'TRAIN'|'TEST'|null $DatasetType
 * @property string|null $Description
 * @property Shapes\DatasetInputDataConfig $InputDataConfig
 * @property string|null $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateDatasetRequest extends Request
{
    /**
     * @param array{
     *     FlywheelArn: string,
     *     DatasetName: string,
     *     DatasetType?: 'TRAIN'|'TEST'|null,
     *     Description?: string|null,
     *     InputDataConfig: Shapes\DatasetInputDataConfig,
     *     ClientRequestToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
