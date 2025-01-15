<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateFarm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $displayName
 * @property string|null $description
 * @property string|null $kmsKeyArn
 * @property array<string, string>|null $tags
 */
class CreateFarmRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     displayName: string,
     *     description?: string|null,
     *     kmsKeyArn?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
