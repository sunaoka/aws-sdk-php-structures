<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListTestGridSessionArtifacts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sessionArn
 * @property 'VIDEO'|'LOG'|null $type
 * @property int<1, 1000>|null $maxResult
 * @property string|null $nextToken
 */
class ListTestGridSessionArtifactsRequest extends Request
{
    /**
     * @param array{
     *     sessionArn: string,
     *     type?: 'VIDEO'|'LOG'|null,
     *     maxResult?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
