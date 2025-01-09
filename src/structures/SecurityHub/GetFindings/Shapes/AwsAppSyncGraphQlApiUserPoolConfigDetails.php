<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AppIdClientRegex
 * @property string $AwsRegion
 * @property string $DefaultAction
 * @property string $UserPoolId
 */
class AwsAppSyncGraphQlApiUserPoolConfigDetails extends Shape
{
    /**
     * @param array{
     *     AppIdClientRegex?: string,
     *     AwsRegion?: string,
     *     DefaultAction?: string,
     *     UserPoolId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
