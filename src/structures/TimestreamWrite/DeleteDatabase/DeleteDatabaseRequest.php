<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\DeleteDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatabaseName
 */
class DeleteDatabaseRequest extends Request
{
    /**
     * @param array{DatabaseName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
