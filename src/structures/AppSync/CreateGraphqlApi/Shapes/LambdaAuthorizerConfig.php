<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateGraphqlApi\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 3600>|null $authorizerResultTtlInSeconds
 * @property string $authorizerUri
 * @property string|null $identityValidationExpression
 */
class LambdaAuthorizerConfig extends Shape
{
    /**
     * @param array{
     *     authorizerResultTtlInSeconds?: int<0, 3600>|null,
     *     authorizerUri: string,
     *     identityValidationExpression?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
