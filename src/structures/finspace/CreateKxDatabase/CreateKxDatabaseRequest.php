<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $databaseName
 * @property string $description
 * @property array<string, string> $tags
 * @property string $clientToken
 */
class CreateKxDatabaseRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     databaseName: string,
     *     description?: string,
     *     tags?: array<string, string>,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
