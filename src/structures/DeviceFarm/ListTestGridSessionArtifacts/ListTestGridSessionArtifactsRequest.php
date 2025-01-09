<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListTestGridSessionArtifacts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sessionArn
 * @property 'VIDEO'|'LOG' $type
 * @property int $maxResult
 * @property string $nextToken
 */
class ListTestGridSessionArtifactsRequest extends Request
{
    /**
     * @param array{
     *     sessionArn: string,
     *     type?: 'VIDEO'|'LOG',
     *     maxResult?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
