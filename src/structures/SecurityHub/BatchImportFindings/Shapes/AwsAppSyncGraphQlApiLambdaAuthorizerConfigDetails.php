<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $AuthorizerResultTtlInSeconds
 * @property string|null $AuthorizerUri
 * @property string|null $IdentityValidationExpression
 */
class AwsAppSyncGraphQlApiLambdaAuthorizerConfigDetails extends Shape
{
    /**
     * @param array{
     *     AuthorizerResultTtlInSeconds?: int|null,
     *     AuthorizerUri?: string|null,
     *     IdentityValidationExpression?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
