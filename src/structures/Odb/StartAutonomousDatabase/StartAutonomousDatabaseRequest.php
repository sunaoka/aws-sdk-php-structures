<?php

namespace Sunaoka\Aws\Structures\Odb\StartAutonomousDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $autonomousDatabaseId
 */
class StartAutonomousDatabaseRequest extends Request
{
    /**
     * @param array{autonomousDatabaseId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
