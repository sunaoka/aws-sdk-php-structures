<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string|null $name
 * @property string|null $description
 * @property string|null $clientToken
 */
class UpdateKxEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     name?: string|null,
     *     description?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
