<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ExecuteFastReset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'initiateDatabaseReset'|'performDatabaseReset' $action
 * @property string $token
 */
class ExecuteFastResetRequest extends Request
{
    /**
     * @param array{
     *     action: 'initiateDatabaseReset'|'performDatabaseReset',
     *     token?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
