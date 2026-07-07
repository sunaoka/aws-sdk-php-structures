<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AzureScopeConfiguration $ScopeConfiguration
 * @property list<string> $AzureRegions
 */
class AzureUpdateConfiguration extends Shape
{
    /**
     * @param array{
     *     ScopeConfiguration: AzureScopeConfiguration,
     *     AzureRegions: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
