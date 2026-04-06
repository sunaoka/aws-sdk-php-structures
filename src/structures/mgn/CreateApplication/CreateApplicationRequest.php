<?php

namespace Sunaoka\Aws\Structures\mgn\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property array<string, string>|null $tags
 * @property string|null $accountID
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     tags?: array<string, string>|null,
     *     accountID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
