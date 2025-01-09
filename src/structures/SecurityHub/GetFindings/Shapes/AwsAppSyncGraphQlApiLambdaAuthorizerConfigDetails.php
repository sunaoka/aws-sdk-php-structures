<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AuthorizerResultTtlInSeconds
 * @property string $AuthorizerUri
 * @property string $IdentityValidationExpression
 */
class AwsAppSyncGraphQlApiLambdaAuthorizerConfigDetails extends Shape
{
    /**
     * @param array{
     *     AuthorizerResultTtlInSeconds?: int,
     *     AuthorizerUri?: string,
     *     IdentityValidationExpression?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
