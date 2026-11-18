<?php

namespace Sunaoka\Aws\Structures\mgn\ListRemoteSourceActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $remoteSourceActionID
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $description
 * @property string|null $ssmParameterName
 * @property int<60, 5400>|null $timeoutSeconds
 * @property string|null $operatingSystem
 * @property array<string, string>|null $tags
 */
class RemoteSourceAction extends Shape
{
    /**
     * @param array{
     *     remoteSourceActionID?: string|null,
     *     arn?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     ssmParameterName?: string|null,
     *     timeoutSeconds?: int<60, 5400>|null,
     *     operatingSystem?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
