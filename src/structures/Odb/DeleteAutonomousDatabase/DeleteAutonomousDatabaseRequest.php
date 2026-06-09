<?php

namespace Sunaoka\Aws\Structures\Odb\DeleteAutonomousDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $autonomousDatabaseId
 */
class DeleteAutonomousDatabaseRequest extends Request
{
    /**
     * @param array{autonomousDatabaseId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
