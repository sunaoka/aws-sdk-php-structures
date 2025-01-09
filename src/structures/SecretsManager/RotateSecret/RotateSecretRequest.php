<?php

namespace Sunaoka\Aws\Structures\SecretsManager\RotateSecret;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 * @property string $ClientRequestToken
 * @property string $RotationLambdaARN
 * @property Shapes\RotationRulesType $RotationRules
 * @property bool $RotateImmediately
 */
class RotateSecretRequest extends Request
{
    /**
     * @param array{
     *     SecretId: string,
     *     ClientRequestToken?: string,
     *     RotationLambdaARN?: string,
     *     RotationRules?: Shapes\RotationRulesType,
     *     RotateImmediately?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
