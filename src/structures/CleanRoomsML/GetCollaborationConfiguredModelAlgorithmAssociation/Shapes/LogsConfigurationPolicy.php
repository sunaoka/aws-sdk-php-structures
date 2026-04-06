<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetCollaborationConfiguredModelAlgorithmAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $allowedAccountIds
 * @property string|null $filterPattern
 */
class LogsConfigurationPolicy extends Shape
{
    /**
     * @param array{
     *     allowedAccountIds: list<string>,
     *     filterPattern?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
