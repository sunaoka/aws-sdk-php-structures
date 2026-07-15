<?php

namespace Sunaoka\Aws\Structures\HealthLake\ListDataTransformationProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProfileId
 * @property int<0, 99> $Version
 * @property 'CCDA'|'CSV' $SourceFormat
 * @property 'FHIR_R4' $TargetFormat
 * @property string|null $ProfileName
 * @property string|null $ProfileDescription
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 */
class DataTransformationProfileSummary extends Shape
{
    /**
     * @param array{
     *     ProfileId: string,
     *     Version: int<0, 99>,
     *     SourceFormat: 'CCDA'|'CSV',
     *     TargetFormat: 'FHIR_R4',
     *     ProfileName?: string|null,
     *     ProfileDescription?: string|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
