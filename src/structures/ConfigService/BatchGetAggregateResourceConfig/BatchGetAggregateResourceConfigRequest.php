<?php

namespace Sunaoka\Aws\Structures\ConfigService\BatchGetAggregateResourceConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationAggregatorName
 * @property list<Shapes\AggregateResourceIdentifier> $ResourceIdentifiers
 */
class BatchGetAggregateResourceConfigRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationAggregatorName: string,
     *     ResourceIdentifiers: list<Shapes\AggregateResourceIdentifier>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
