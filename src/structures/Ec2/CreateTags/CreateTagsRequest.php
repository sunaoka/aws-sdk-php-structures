<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<string> $Resources
 * @property list<Shapes\Tag> $Tags
 */
class CreateTagsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Resources: list<string>,
     *     Tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
