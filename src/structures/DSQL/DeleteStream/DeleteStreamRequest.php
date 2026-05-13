<?php

namespace Sunaoka\Aws\Structures\DSQL\DeleteStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterIdentifier
 * @property string $streamIdentifier
 * @property string|null $clientToken
 */
class DeleteStreamRequest extends Request
{
    /**
     * @param array{
     *     clusterIdentifier: string,
     *     streamIdentifier: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
