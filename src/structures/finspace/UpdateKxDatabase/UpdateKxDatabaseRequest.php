<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $databaseName
 * @property string $description
 * @property string $clientToken
 */
class UpdateKxDatabaseRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     databaseName: string,
     *     description?: string,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
