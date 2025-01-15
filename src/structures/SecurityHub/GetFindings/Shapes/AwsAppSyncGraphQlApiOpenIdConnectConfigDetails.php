<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $AuthTtL
 * @property string|null $ClientId
 * @property int|null $IatTtL
 * @property string|null $Issuer
 */
class AwsAppSyncGraphQlApiOpenIdConnectConfigDetails extends Shape
{
    /**
     * @param array{
     *     AuthTtL?: int|null,
     *     ClientId?: string|null,
     *     IatTtL?: int|null,
     *     Issuer?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
