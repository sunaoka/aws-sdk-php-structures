<?php

namespace Sunaoka\Aws\Structures\Odb\SwitchoverAutonomousDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $autonomousDatabaseId
 * @property string|null $peerDbArn
 */
class SwitchoverAutonomousDatabaseRequest extends Request
{
    /**
     * @param array{
     *     autonomousDatabaseId: string,
     *     peerDbArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
