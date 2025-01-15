<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsSecretsManagerSecretRotationRules|null $RotationRules
 * @property bool|null $RotationOccurredWithinFrequency
 * @property string|null $KmsKeyId
 * @property bool|null $RotationEnabled
 * @property string|null $RotationLambdaArn
 * @property bool|null $Deleted
 * @property string|null $Name
 * @property string|null $Description
 */
class AwsSecretsManagerSecretDetails extends Shape
{
    /**
     * @param array{
     *     RotationRules?: AwsSecretsManagerSecretRotationRules|null,
     *     RotationOccurredWithinFrequency?: bool|null,
     *     KmsKeyId?: string|null,
     *     RotationEnabled?: bool|null,
     *     RotationLambdaArn?: string|null,
     *     Deleted?: bool|null,
     *     Name?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
