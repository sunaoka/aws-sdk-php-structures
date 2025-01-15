<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property string|null $DatasetName
 * @property string|null $EncryptionKeyArn
 * @property 'SSE-KMS'|'SSE-S3'|null $EncryptionMode
 * @property string $Name
 * @property 'PROFILE'|'RECIPE'|null $Type
 * @property string|null $LastModifiedBy
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property 'ENABLE'|'DISABLE'|null $LogSubscription
 * @property int|null $MaxCapacity
 * @property int<0, max>|null $MaxRetries
 * @property list<Output>|null $Outputs
 * @property list<DataCatalogOutput>|null $DataCatalogOutputs
 * @property list<DatabaseOutput>|null $DatabaseOutputs
 * @property string|null $ProjectName
 * @property RecipeReference|null $RecipeReference
 * @property string|null $ResourceArn
 * @property string|null $RoleArn
 * @property int<0, max>|null $Timeout
 * @property array<string, string>|null $Tags
 * @property JobSample|null $JobSample
 * @property list<ValidationConfiguration>|null $ValidationConfigurations
 */
class Job extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     CreatedBy?: string|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null,
     *     DatasetName?: string|null,
     *     EncryptionKeyArn?: string|null,
     *     EncryptionMode?: 'SSE-KMS'|'SSE-S3'|null,
     *     Name: string,
     *     Type?: 'PROFILE'|'RECIPE'|null,
     *     LastModifiedBy?: string|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     LogSubscription?: 'ENABLE'|'DISABLE'|null,
     *     MaxCapacity?: int|null,
     *     MaxRetries?: int<0, max>|null,
     *     Outputs?: list<Output>|null,
     *     DataCatalogOutputs?: list<DataCatalogOutput>|null,
     *     DatabaseOutputs?: list<DatabaseOutput>|null,
     *     ProjectName?: string|null,
     *     RecipeReference?: RecipeReference|null,
     *     ResourceArn?: string|null,
     *     RoleArn?: string|null,
     *     Timeout?: int<0, max>|null,
     *     Tags?: array<string, string>|null,
     *     JobSample?: JobSample|null,
     *     ValidationConfigurations?: list<ValidationConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
