<?php

namespace Sunaoka\Aws\Structures\Kafka\DeleteConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class DeleteConfigurationRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
