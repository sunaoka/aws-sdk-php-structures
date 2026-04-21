<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAIWorkloadConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AIWorkloadConfigName
 * @property Shapes\AIDatasetConfig|null $DatasetConfig
 * @property Shapes\AIWorkloadConfigs|null $AIWorkloadConfigs
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateAIWorkloadConfigRequest extends Request
{
    /**
     * @param array{
     *     AIWorkloadConfigName: string,
     *     DatasetConfig?: Shapes\AIDatasetConfig|null,
     *     AIWorkloadConfigs?: Shapes\AIWorkloadConfigs|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
