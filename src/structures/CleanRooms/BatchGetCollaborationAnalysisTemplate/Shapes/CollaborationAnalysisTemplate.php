<?php

namespace Sunaoka\Aws\Structures\CleanRooms\BatchGetCollaborationAnalysisTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $collaborationId
 * @property string $collaborationArn
 * @property string|null $description
 * @property string $creatorAccountId
 * @property string $name
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property AnalysisSchema $schema
 * @property 'SQL'|'PYSPARK_1_0' $format
 * @property AnalysisSource|null $source
 * @property AnalysisSourceMetadata|null $sourceMetadata
 * @property list<AnalysisParameter>|null $analysisParameters
 * @property list<AnalysisTemplateValidationStatusDetail>|null $validations
 * @property ErrorMessageConfiguration|null $errorMessageConfiguration
 * @property SyntheticDataParameters|null $syntheticDataParameters
 */
class CollaborationAnalysisTemplate extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     collaborationId: string,
     *     collaborationArn: string,
     *     description?: string|null,
     *     creatorAccountId: string,
     *     name: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     schema: AnalysisSchema,
     *     format: 'SQL'|'PYSPARK_1_0',
     *     source?: AnalysisSource|null,
     *     sourceMetadata?: AnalysisSourceMetadata|null,
     *     analysisParameters?: list<AnalysisParameter>|null,
     *     validations?: list<AnalysisTemplateValidationStatusDetail>|null,
     *     errorMessageConfiguration?: ErrorMessageConfiguration|null,
     *     syntheticDataParameters?: SyntheticDataParameters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
