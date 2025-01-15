<?php

namespace Sunaoka\Aws\Structures\mgn\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accountID
 * @property string|null $description
 * @property string $name
 * @property array<string, string>|null $tags
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string|null,
     *     description?: string|null,
     *     name: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
