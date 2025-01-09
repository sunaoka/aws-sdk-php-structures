<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\DeleteReplicationSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeleteReplicationSetRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
