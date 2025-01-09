<?php

namespace Sunaoka\Aws\Structures\SecretsManager\DescribeSecret;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ARN
 * @property string $Name
 * @property string $Description
 * @property string $KmsKeyId
 * @property bool $RotationEnabled
 * @property string $RotationLambdaARN
 * @property Shapes\RotationRulesType $RotationRules
 * @property \Aws\Api\DateTimeResult $LastRotatedDate
 * @property \Aws\Api\DateTimeResult $LastChangedDate
 * @property \Aws\Api\DateTimeResult $LastAccessedDate
 * @property \Aws\Api\DateTimeResult $DeletedDate
 * @property \Aws\Api\DateTimeResult $NextRotationDate
 * @property list<Shapes\Tag> $Tags
 * @property array<string, list<string>> $VersionIdsToStages
 * @property string $OwningService
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property string $PrimaryRegion
 * @property list<Shapes\ReplicationStatusType> $ReplicationStatus
 */
class DescribeSecretResponse extends Response
{
}
