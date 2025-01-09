<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\UpdateReplicationSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\UpdateReplicationSetAction> $actions
 * @property string $arn
 * @property string $clientToken
 */
class UpdateReplicationSetRequest extends Request
{
    /**
     * @param array{
     *     actions: list<Shapes\UpdateReplicationSetAction>,
     *     arn: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
