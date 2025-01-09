<?php

namespace Sunaoka\Aws\Structures\PCS\DeleteQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterIdentifier
 * @property string $queueIdentifier
 * @property string $clientToken
 */
class DeleteQueueRequest extends Request
{
    /**
     * @param array{
     *     clusterIdentifier: string,
     *     queueIdentifier: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
