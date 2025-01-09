<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Items
 * @property int $Quantity
 */
class AwsCloudFrontDistributionOriginSslProtocols extends Shape
{
    /**
     * @param array{
     *     Items?: list<string>,
     *     Quantity?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
