<?php

namespace Sunaoka\Aws\Structures\SecretsManager\ListSecrets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ARN
 * @property string|null $Name
 * @property string|null $Type
 * @property string|null $Description
 * @property string|null $KmsKeyId
 * @property bool|null $RotationEnabled
 * @property string|null $RotationLambdaARN
 * @property RotationRulesType|null $RotationRules
 * @property list<ExternalSecretRotationMetadataItem>|null $ExternalSecretRotationMetadata
 * @property string|null $ExternalSecretRotationRoleArn
 * @property \Aws\Api\DateTimeResult|null $LastRotatedDate
 * @property \Aws\Api\DateTimeResult|null $LastChangedDate
 * @property \Aws\Api\DateTimeResult|null $LastAccessedDate
 * @property \Aws\Api\DateTimeResult|null $DeletedDate
 * @property \Aws\Api\DateTimeResult|null $NextRotationDate
 * @property list<Tag>|null $Tags
 * @property array<string, list<string>>|null $SecretVersionsToStages
 * @property string|null $OwningService
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property string|null $PrimaryRegion
 */
class SecretListEntry extends Shape
{
    /**
     * @param array{
     *     ARN?: string|null,
     *     Name?: string|null,
     *     Type?: string|null,
     *     Description?: string|null,
     *     KmsKeyId?: string|null,
     *     RotationEnabled?: bool|null,
     *     RotationLambdaARN?: string|null,
     *     RotationRules?: RotationRulesType|null,
     *     ExternalSecretRotationMetadata?: list<ExternalSecretRotationMetadataItem>|null,
     *     ExternalSecretRotationRoleArn?: string|null,
     *     LastRotatedDate?: \Aws\Api\DateTimeResult|null,
     *     LastChangedDate?: \Aws\Api\DateTimeResult|null,
     *     LastAccessedDate?: \Aws\Api\DateTimeResult|null,
     *     DeletedDate?: \Aws\Api\DateTimeResult|null,
     *     NextRotationDate?: \Aws\Api\DateTimeResult|null,
     *     Tags?: list<Tag>|null,
     *     SecretVersionsToStages?: array<string, list<string>>|null,
     *     OwningService?: string|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     PrimaryRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
