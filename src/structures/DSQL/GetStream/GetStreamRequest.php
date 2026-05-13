<?php

namespace Sunaoka\Aws\Structures\DSQL\GetStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterIdentifier
 * @property string $streamIdentifier
 */
class GetStreamRequest extends Request
{
    /**
     * @param array{
     *     clusterIdentifier: string,
     *     streamIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
