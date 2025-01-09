<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateAnalysisTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $collaborationId
 * @property string $collaborationArn
 * @property string $membershipId
 * @property string $membershipArn
 * @property string $description
 * @property string $name
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property AnalysisSchema $schema
 * @property 'SQL' $format
 * @property AnalysisSource $source
 * @property list<AnalysisParameter> $analysisParameters
 * @property list<AnalysisTemplateValidationStatusDetail> $validations
 */
class AnalysisTemplate extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     collaborationId: string,
     *     collaborationArn: string,
     *     membershipId: string,
     *     membershipArn: string,
     *     description?: string,
     *     name: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     schema: AnalysisSchema,
     *     format: 'SQL',
     *     source: AnalysisSource,
     *     analysisParameters?: list<AnalysisParameter>,
     *     validations?: list<AnalysisTemplateValidationStatusDetail>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
