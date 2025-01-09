<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\LookupPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property Shapes\ObjectReference $ObjectReference
 * @property string $NextToken
 * @property int<1, max> $MaxResults
 */
class LookupPolicyRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     ObjectReference: Shapes\ObjectReference,
     *     NextToken?: string,
     *     MaxResults?: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
