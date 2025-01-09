<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $databaseName
 */
class GetKxDatabaseRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     databaseName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
