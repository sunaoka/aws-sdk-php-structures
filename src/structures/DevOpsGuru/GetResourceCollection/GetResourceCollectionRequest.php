<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\GetResourceCollection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS_CLOUD_FORMATION'|'AWS_SERVICE'|'AWS_TAGS' $ResourceCollectionType
 * @property string $NextToken
 */
class GetResourceCollectionRequest extends Request
{
    /**
     * @param array{
     *     ResourceCollectionType: 'AWS_CLOUD_FORMATION'|'AWS_SERVICE'|'AWS_TAGS',
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
