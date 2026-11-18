<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateRemoteSourceAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $remoteSourceActionID
 * @property string|null $name
 * @property string|null $description
 * @property string|null $ssmParameterName
 * @property int<60, 5400>|null $timeoutSeconds
 * @property string|null $operatingSystem
 * @property string|null $accountID
 */
class UpdateRemoteSourceActionRequest extends Request
{
    /**
     * @param array{
     *     remoteSourceActionID: string,
     *     name?: string|null,
     *     description?: string|null,
     *     ssmParameterName?: string|null,
     *     timeoutSeconds?: int<60, 5400>|null,
     *     operatingSystem?: string|null,
     *     accountID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
