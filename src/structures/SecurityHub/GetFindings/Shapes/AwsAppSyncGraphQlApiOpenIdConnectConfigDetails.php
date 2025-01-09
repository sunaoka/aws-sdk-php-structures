<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AuthTtL
 * @property string $ClientId
 * @property int $IatTtL
 * @property string $Issuer
 */
class AwsAppSyncGraphQlApiOpenIdConnectConfigDetails extends Shape
{
    /**
     * @param array{
     *     AuthTtL?: int,
     *     ClientId?: string,
     *     IatTtL?: int,
     *     Issuer?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
