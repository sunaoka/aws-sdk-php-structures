<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DeleteCustomPlugin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $customPluginArn
 */
class DeleteCustomPluginRequest extends Request
{
    /**
     * @param array{customPluginArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
