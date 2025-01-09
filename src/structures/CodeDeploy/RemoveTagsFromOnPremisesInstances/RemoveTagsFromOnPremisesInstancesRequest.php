<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\RemoveTagsFromOnPremisesInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Tag> $tags
 * @property list<string> $instanceNames
 */
class RemoveTagsFromOnPremisesInstancesRequest extends Request
{
    /**
     * @param array{
     *     tags: list<Shapes\Tag>,
     *     instanceNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
