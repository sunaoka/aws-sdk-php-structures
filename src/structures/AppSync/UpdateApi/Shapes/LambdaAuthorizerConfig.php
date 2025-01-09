<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateApi\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 3600> $authorizerResultTtlInSeconds
 * @property string $authorizerUri
 * @property string $identityValidationExpression
 */
class LambdaAuthorizerConfig extends Shape
{
    /**
     * @param array{
     *     authorizerResultTtlInSeconds?: int<0, 3600>,
     *     authorizerUri: string,
     *     identityValidationExpression?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
