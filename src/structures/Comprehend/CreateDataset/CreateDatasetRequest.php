<?php

namespace Sunaoka\Aws\Structures\Comprehend\CreateDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlywheelArn
 * @property string $DatasetName
 * @property 'TRAIN'|'TEST' $DatasetType
 * @property string $Description
 * @property Shapes\DatasetInputDataConfig $InputDataConfig
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag> $Tags
 */
class CreateDatasetRequest extends Request
{
    /**
     * @param array{
     *     FlywheelArn: string,
     *     DatasetName: string,
     *     DatasetType?: 'TRAIN'|'TEST',
     *     Description?: string,
     *     InputDataConfig: Shapes\DatasetInputDataConfig,
     *     ClientRequestToken?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
