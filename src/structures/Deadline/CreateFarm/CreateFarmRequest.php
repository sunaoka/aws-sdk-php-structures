<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateFarm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $displayName
 * @property string $description
 * @property string $kmsKeyArn
 * @property array<string, string> $tags
 */
class CreateFarmRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     displayName: string,
     *     description?: string,
     *     kmsKeyArn?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
