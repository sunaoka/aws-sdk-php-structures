<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property string $CreatedBy
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
 * @property list<Shapes\Output> $Outputs
 * @property list<Shapes\DataCatalogOutput> $DataCatalogOutputs
 * @property list<Shapes\DatabaseOutput> $DatabaseOutputs
 * @property string $ProjectName
 * @property Shapes\ProfileConfiguration $ProfileConfiguration
 * @property list<Shapes\ValidationConfiguration> $ValidationConfigurations
 * @property Shapes\RecipeReference $RecipeReference
 * @property string $ResourceArn
 * @property string $RoleArn
 * @property array<string, string> $Tags
 * @property int<0, max> $Timeout
 * @property Shapes\JobSample $JobSample
 */
class DescribeJobResponse extends Response
{
}
