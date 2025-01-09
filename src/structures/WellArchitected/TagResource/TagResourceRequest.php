<?php

namespace Sunaoka\Aws\Structures\WellArchitected\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadArn
 * @property array<string, string> $Tags
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     WorkloadArn: string,
     *     Tags: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
