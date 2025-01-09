<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $CreatedBy
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property string $DatasetName
 * @property string $EncryptionKeyArn
 * @property 'SSE-KMS'|'SSE-S3' $EncryptionMode
 * @property string $Name
 * @property 'PROFILE'|'RECIPE' $Type
 * @property string $LastModifiedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property 'ENABLE'|'DISABLE' $LogSubscription
 * @property int $MaxCapacity
 * @property int<0, max> $MaxRetries
 * @property list<Output> $Outputs
 * @property list<DataCatalogOutput> $DataCatalogOutputs
 * @property list<DatabaseOutput> $DatabaseOutputs
 * @property string $ProjectName
 * @property RecipeReference $RecipeReference
 * @property string $ResourceArn
 * @property string $RoleArn
 * @property int<0, max> $Timeout
 * @property array<string, string> $Tags
 * @property JobSample $JobSample
 * @property list<ValidationConfiguration> $ValidationConfigurations
 */
class Job extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     CreatedBy?: string,
     *     CreateDate?: \Aws\Api\DateTimeResult,
     *     DatasetName?: string,
     *     EncryptionKeyArn?: string,
     *     EncryptionMode?: 'SSE-KMS'|'SSE-S3',
     *     Name: string,
     *     Type?: 'PROFILE'|'RECIPE',
     *     LastModifiedBy?: string,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult,
     *     LogSubscription?: 'ENABLE'|'DISABLE',
     *     MaxCapacity?: int,
     *     MaxRetries?: int<0, max>,
     *     Outputs?: list<Output>,
     *     DataCatalogOutputs?: list<DataCatalogOutput>,
     *     DatabaseOutputs?: list<DatabaseOutput>,
     *     ProjectName?: string,
     *     RecipeReference?: RecipeReference,
     *     ResourceArn?: string,
     *     RoleArn?: string,
     *     Timeout?: int<0, max>,
     *     Tags?: array<string, string>,
     *     JobSample?: JobSample,
     *     ValidationConfigurations?: list<ValidationConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
