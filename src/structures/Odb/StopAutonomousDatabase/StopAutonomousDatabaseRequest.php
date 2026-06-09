<?php

namespace Sunaoka\Aws\Structures\Odb\StopAutonomousDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $autonomousDatabaseId
 */
class StopAutonomousDatabaseRequest extends Request
{
    /**
     * @param array{autonomousDatabaseId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
