<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\UngroupResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Group
 * @property list<string> $ResourceArns
 */
class UngroupResourcesRequest extends Request
{
    /**
     * @param array{
     *     Group: string,
     *     ResourceArns: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
