<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoMLJobName
 * @property list<Shapes\AutoMLChannel> $InputDataConfig
 * @property Shapes\AutoMLOutputDataConfig $OutputDataConfig
 * @property 'BinaryClassification'|'MulticlassClassification'|'Regression'|null $ProblemType
 * @property Shapes\AutoMLJobObjective|null $AutoMLJobObjective
 * @property Shapes\AutoMLJobConfig|null $AutoMLJobConfig
 * @property string $RoleArn
 * @property bool|null $GenerateCandidateDefinitionsOnly
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\ModelDeployConfig|null $ModelDeployConfig
 */
class CreateAutoMLJobRequest extends Request
{
    /**
     * @param array{
     *     AutoMLJobName: string,
     *     InputDataConfig: list<Shapes\AutoMLChannel>,
     *     OutputDataConfig: Shapes\AutoMLOutputDataConfig,
     *     ProblemType?: 'BinaryClassification'|'MulticlassClassification'|'Regression'|null,
     *     AutoMLJobObjective?: Shapes\AutoMLJobObjective|null,
     *     AutoMLJobConfig?: Shapes\AutoMLJobConfig|null,
     *     RoleArn: string,
     *     GenerateCandidateDefinitionsOnly?: bool|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ModelDeployConfig?: Shapes\ModelDeployConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
