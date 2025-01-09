<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoMLJobName
 * @property list<Shapes\AutoMLChannel> $InputDataConfig
 * @property Shapes\AutoMLOutputDataConfig $OutputDataConfig
 * @property 'BinaryClassification'|'MulticlassClassification'|'Regression' $ProblemType
 * @property Shapes\AutoMLJobObjective $AutoMLJobObjective
 * @property Shapes\AutoMLJobConfig $AutoMLJobConfig
 * @property string $RoleArn
 * @property bool $GenerateCandidateDefinitionsOnly
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\ModelDeployConfig $ModelDeployConfig
 */
class CreateAutoMLJobRequest extends Request
{
    /**
     * @param array{
     *     AutoMLJobName: string,
     *     InputDataConfig: list<Shapes\AutoMLChannel>,
     *     OutputDataConfig: Shapes\AutoMLOutputDataConfig,
     *     ProblemType?: 'BinaryClassification'|'MulticlassClassification'|'Regression',
     *     AutoMLJobObjective?: Shapes\AutoMLJobObjective,
     *     AutoMLJobConfig?: Shapes\AutoMLJobConfig,
     *     RoleArn: string,
     *     GenerateCandidateDefinitionsOnly?: bool,
     *     Tags?: list<Shapes\Tag>,
     *     ModelDeployConfig?: Shapes\ModelDeployConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
