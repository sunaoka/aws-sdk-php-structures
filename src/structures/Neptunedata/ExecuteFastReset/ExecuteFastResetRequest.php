<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ExecuteFastReset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'initiateDatabaseReset'|'performDatabaseReset' $action
 * @property string|null $token
 */
class ExecuteFastResetRequest extends Request
{
    /**
     * @param array{
     *     action: 'initiateDatabaseReset'|'performDatabaseReset',
     *     token?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
