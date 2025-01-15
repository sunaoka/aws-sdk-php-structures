<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListPortfolios\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $ARN
 * @property string|null $DisplayName
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $ProviderName
 */
class PortfolioDetail extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     ARN?: string|null,
     *     DisplayName?: string|null,
     *     Description?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     ProviderName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
