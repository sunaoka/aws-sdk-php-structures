<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateResourceConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationAggregatorName
 * @property Shapes\AggregateResourceIdentifier $ResourceIdentifier
 */
class GetAggregateResourceConfigRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationAggregatorName: string,
     *     ResourceIdentifier: Shapes\AggregateResourceIdentifier
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
