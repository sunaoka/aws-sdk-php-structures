<?php

namespace Sunaoka\Aws\Structures\Neptunedata\StartIndexRebuild;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ALL'|'QUADS'|'DICTIONARIES'|null $scope
 * @property int<1, max>|null $concurrency
 * @property 'LOW'|'MEDIUM'|'HIGH'|null $writeBufferSize
 * @property string|null $clientToken
 */
class StartIndexRebuildRequest extends Request
{
    /**
     * @param array{
     *     scope?: 'ALL'|'QUADS'|'DICTIONARIES'|null,
     *     concurrency?: int<1, max>|null,
     *     writeBufferSize?: 'LOW'|'MEDIUM'|'HIGH'|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
