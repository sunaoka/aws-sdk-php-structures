<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateConfiguredModelAlgorithmAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $allowedAccountIds
 * @property string $filterPattern
 */
class LogsConfigurationPolicy extends Shape
{
    /**
     * @param array{
     *     allowedAccountIds: list<string>,
     *     filterPattern?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
