<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsSecretsManagerSecretRotationRules $RotationRules
 * @property bool $RotationOccurredWithinFrequency
 * @property string $KmsKeyId
 * @property bool $RotationEnabled
 * @property string $RotationLambdaArn
 * @property bool $Deleted
 * @property string $Name
 * @property string $Description
 */
class AwsSecretsManagerSecretDetails extends Shape
{
    /**
     * @param array{
     *     RotationRules?: AwsSecretsManagerSecretRotationRules,
     *     RotationOccurredWithinFrequency?: bool,
     *     KmsKeyId?: string,
     *     RotationEnabled?: bool,
     *     RotationLambdaArn?: string,
     *     Deleted?: bool,
     *     Name?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
