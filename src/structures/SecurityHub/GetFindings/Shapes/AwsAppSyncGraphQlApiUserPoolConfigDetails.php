<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AppIdClientRegex
 * @property string|null $AwsRegion
 * @property string|null $DefaultAction
 * @property string|null $UserPoolId
 */
class AwsAppSyncGraphQlApiUserPoolConfigDetails extends Shape
{
    /**
     * @param array{
     *     AppIdClientRegex?: string|null,
     *     AwsRegion?: string|null,
     *     DefaultAction?: string|null,
     *     UserPoolId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
