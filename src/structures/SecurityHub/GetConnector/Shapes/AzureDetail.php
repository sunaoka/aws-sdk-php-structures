<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AWSConfigConnectorArn
 * @property AzureScopeConfiguration $ScopeConfiguration
 * @property list<string> $AzureRegions
 */
class AzureDetail extends Shape
{
    /**
     * @param array{
     *     AWSConfigConnectorArn: string,
     *     ScopeConfiguration: AzureScopeConfiguration,
     *     AzureRegions: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
