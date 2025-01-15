<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property array<string, string>|null $Tags
 */
class CreateTagsRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
