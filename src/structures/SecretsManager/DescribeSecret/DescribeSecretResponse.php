<?php

namespace Sunaoka\Aws\Structures\SecretsManager\DescribeSecret;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ARN
 * @property string|null $Name
 * @property string|null $Type
 * @property string|null $Description
 * @property string|null $KmsKeyId
 * @property bool|null $RotationEnabled
 * @property string|null $RotationLambdaARN
 * @property Shapes\RotationRulesType|null $RotationRules
 * @property list<Shapes\ExternalSecretRotationMetadataItem>|null $ExternalSecretRotationMetadata
 * @property string|null $ExternalSecretRotationRoleArn
 * @property \Aws\Api\DateTimeResult|null $LastRotatedDate
 * @property \Aws\Api\DateTimeResult|null $LastChangedDate
 * @property \Aws\Api\DateTimeResult|null $LastAccessedDate
 * @property \Aws\Api\DateTimeResult|null $DeletedDate
 * @property \Aws\Api\DateTimeResult|null $NextRotationDate
 * @property list<Shapes\Tag>|null $Tags
 * @property array<string, list<string>>|null $VersionIdsToStages
 * @property string|null $OwningService
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property string|null $PrimaryRegion
 * @property list<Shapes\ReplicationStatusType>|null $ReplicationStatus
 */
class DescribeSecretResponse extends Response
{
}
