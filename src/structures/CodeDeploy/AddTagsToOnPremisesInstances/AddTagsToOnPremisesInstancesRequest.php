<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\AddTagsToOnPremisesInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Tag> $tags
 * @property list<string> $instanceNames
 */
class AddTagsToOnPremisesInstancesRequest extends Request
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
