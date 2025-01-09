<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdatePortfolio\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $ARN
 * @property string $DisplayName
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $ProviderName
 */
class PortfolioDetail extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     ARN?: string,
     *     DisplayName?: string,
     *     Description?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     ProviderName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
