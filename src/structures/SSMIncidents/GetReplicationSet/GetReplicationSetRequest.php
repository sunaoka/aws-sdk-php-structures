<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\GetReplicationSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetReplicationSetRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
