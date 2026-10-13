<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTrainingSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrainingSessionName
 * @property string|null $ModelPackageGroupArn
 * @property Shapes\LoraConfig $LoraConfig
 * @property string $RoleArn
 * @property Shapes\VpcConfig|null $VpcConfig
 * @property Shapes\TrainingSessionModelConfig $ModelConfig
 * @property Shapes\TrainingSessionOutputConfig $OutputConfig
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateTrainingSessionRequest extends Request
{
    /**
     * @param array{
     *     TrainingSessionName: string,
     *     ModelPackageGroupArn?: string|null,
     *     LoraConfig: Shapes\LoraConfig,
     *     RoleArn: string,
     *     VpcConfig?: Shapes\VpcConfig|null,
     *     ModelConfig: Shapes\TrainingSessionModelConfig,
     *     OutputConfig: Shapes\TrainingSessionOutputConfig,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
