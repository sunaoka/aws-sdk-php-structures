<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateGraphqlApi\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $authorizerResultTtlInSeconds
 * @property string $authorizerUri
 * @property string $identityValidationExpression
 */
class LambdaAuthorizerConfig extends Shape
{
    /**
     * @param array{
     *     authorizerResultTtlInSeconds?: int,
     *     authorizerUri: string,
     *     identityValidationExpression?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
