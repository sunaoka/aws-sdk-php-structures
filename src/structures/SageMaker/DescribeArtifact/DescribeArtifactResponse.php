<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeArtifact;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ArtifactName
 * @property string|null $ArtifactArn
 * @property Shapes\ArtifactSource|null $Source
 * @property string|null $ArtifactType
 * @property array<string, string>|null $Properties
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property Shapes\UserContext|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property Shapes\UserContext|null $LastModifiedBy
 * @property Shapes\MetadataProperties|null $MetadataProperties
 * @property string|null $LineageGroupArn
 */
class DescribeArtifactResponse extends Response
{
}
