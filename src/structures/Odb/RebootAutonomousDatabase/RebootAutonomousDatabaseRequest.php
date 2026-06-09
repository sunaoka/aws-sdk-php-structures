<?php

namespace Sunaoka\Aws\Structures\Odb\RebootAutonomousDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $autonomousDatabaseId
 * @property bool|null $isOnlineReboot
 */
class RebootAutonomousDatabaseRequest extends Request
{
    /**
     * @param array{
     *     autonomousDatabaseId: string,
     *     isOnlineReboot?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
