<?php

namespace Sunaoka\Aws\Structures\Odb\ShrinkAutonomousDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $autonomousDatabaseId
 */
class ShrinkAutonomousDatabaseRequest extends Request
{
    /**
     * @param array{autonomousDatabaseId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
