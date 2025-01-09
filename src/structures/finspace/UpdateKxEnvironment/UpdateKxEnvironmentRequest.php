<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $name
 * @property string $description
 * @property string $clientToken
 */
class UpdateKxEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     name?: string,
     *     description?: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
