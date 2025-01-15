<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ResourceArn
 * @property list<string>|null $ResourceArnList
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn?: string|null,
     *     ResourceArnList?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
