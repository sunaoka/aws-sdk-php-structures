<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Items
 * @property int|null $Quantity
 */
class AwsCloudFrontDistributionOriginSslProtocols extends Shape
{
    /**
     * @param array{
     *     Items?: list<string>|null,
     *     Quantity?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
