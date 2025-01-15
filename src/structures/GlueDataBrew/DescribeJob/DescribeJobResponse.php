<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property string|null $CreatedBy
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
 * @property list<Shapes\Output>|null $Outputs
 * @property list<Shapes\DataCatalogOutput>|null $DataCatalogOutputs
 * @property list<Shapes\DatabaseOutput>|null $DatabaseOutputs
 * @property string|null $ProjectName
 * @property Shapes\ProfileConfiguration|null $ProfileConfiguration
 * @property list<Shapes\ValidationConfiguration>|null $ValidationConfigurations
 * @property Shapes\RecipeReference|null $RecipeReference
 * @property string|null $ResourceArn
 * @property string|null $RoleArn
 * @property array<string, string>|null $Tags
 * @property int<0, max>|null $Timeout
 * @property Shapes\JobSample|null $JobSample
 */
class DescribeJobResponse extends Response
{
}
