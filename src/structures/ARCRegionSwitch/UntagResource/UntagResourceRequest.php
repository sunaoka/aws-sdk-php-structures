<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property list<string> $resourceTagKeys
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     resourceTagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
