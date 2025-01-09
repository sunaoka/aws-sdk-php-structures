<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateAwsLogSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AwsLogSourceConfiguration> $sources
 */
class CreateAwsLogSourceRequest extends Request
{
    /**
     * @param array{sources: list<Shapes\AwsLogSourceConfiguration>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
