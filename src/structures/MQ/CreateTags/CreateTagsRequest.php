<?php

namespace Sunaoka\Aws\Structures\MQ\CreateTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property array<string, string> $Tags
 */
class CreateTagsRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
