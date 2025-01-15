<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListArtifacts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property 'SCREENSHOT'|'FILE'|'LOG' $type
 * @property string|null $nextToken
 */
class ListArtifactsRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     type: 'SCREENSHOT'|'FILE'|'LOG',
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
