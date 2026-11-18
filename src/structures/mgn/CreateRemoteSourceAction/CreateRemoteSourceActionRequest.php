<?php

namespace Sunaoka\Aws\Structures\mgn\CreateRemoteSourceAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string $ssmParameterName
 * @property int<60, 5400>|null $timeoutSeconds
 * @property string|null $operatingSystem
 * @property array<string, string>|null $tags
 * @property string|null $accountID
 */
class CreateRemoteSourceActionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     ssmParameterName: string,
     *     timeoutSeconds?: int<60, 5400>|null,
     *     operatingSystem?: string|null,
     *     tags?: array<string, string>|null,
     *     accountID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
