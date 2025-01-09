<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteConfigurationAggregator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationAggregatorName
 */
class DeleteConfigurationAggregatorRequest extends Request
{
    /**
     * @param array{ConfigurationAggregatorName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
