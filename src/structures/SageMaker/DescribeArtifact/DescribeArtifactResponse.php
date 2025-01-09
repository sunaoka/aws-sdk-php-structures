<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeArtifact;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ArtifactName
 * @property string $ArtifactArn
 * @property Shapes\ArtifactSource $Source
 * @property string $ArtifactType
 * @property array<string, string> $Properties
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\UserContext $CreatedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property Shapes\UserContext $LastModifiedBy
 * @property Shapes\MetadataProperties $MetadataProperties
 * @property string $LineageGroupArn
 */
class DescribeArtifactResponse extends Response
{
}
