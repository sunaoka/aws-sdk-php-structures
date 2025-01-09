<?php

namespace Sunaoka\Aws\Structures\SecretsManager\ListSecrets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ARN
 * @property string $Name
 * @property string $Description
 * @property string $KmsKeyId
 * @property bool $RotationEnabled
 * @property string $RotationLambdaARN
 * @property RotationRulesType $RotationRules
 * @property \Aws\Api\DateTimeResult $LastRotatedDate
 * @property \Aws\Api\DateTimeResult $LastChangedDate
 * @property \Aws\Api\DateTimeResult $LastAccessedDate
 * @property \Aws\Api\DateTimeResult $DeletedDate
 * @property \Aws\Api\DateTimeResult $NextRotationDate
 * @property list<Tag> $Tags
 * @property array<string, list<string>> $SecretVersionsToStages
 * @property string $OwningService
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property string $PrimaryRegion
 */
class SecretListEntry extends Shape
{
    /**
     * @param array{
     *     ARN?: string,
     *     Name?: string,
     *     Description?: string,
     *     KmsKeyId?: string,
     *     RotationEnabled?: bool,
     *     RotationLambdaARN?: string,
     *     RotationRules?: RotationRulesType,
     *     LastRotatedDate?: \Aws\Api\DateTimeResult,
     *     LastChangedDate?: \Aws\Api\DateTimeResult,
     *     LastAccessedDate?: \Aws\Api\DateTimeResult,
     *     DeletedDate?: \Aws\Api\DateTimeResult,
     *     NextRotationDate?: \Aws\Api\DateTimeResult,
     *     Tags?: list<Tag>,
     *     SecretVersionsToStages?: array<string, list<string>>,
     *     OwningService?: string,
     *     CreatedDate?: \Aws\Api\DateTimeResult,
     *     PrimaryRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
