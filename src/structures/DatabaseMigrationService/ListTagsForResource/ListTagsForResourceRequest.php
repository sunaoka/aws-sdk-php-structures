<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property list<string> $ResourceArnList
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn?: string,
     *     ResourceArnList?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
