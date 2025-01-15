<?php

namespace Sunaoka\Aws\Structures\SecretsManager\RotateSecret;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 * @property string|null $ClientRequestToken
 * @property string|null $RotationLambdaARN
 * @property Shapes\RotationRulesType|null $RotationRules
 * @property bool|null $RotateImmediately
 */
class RotateSecretRequest extends Request
{
    /**
     * @param array{
     *     SecretId: string,
     *     ClientRequestToken?: string|null,
     *     RotationLambdaARN?: string|null,
     *     RotationRules?: Shapes\RotationRulesType|null,
     *     RotateImmediately?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
