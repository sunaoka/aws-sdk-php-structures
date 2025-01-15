<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<string> $Resources
 * @property list<Shapes\Tag>|null $Tags
 */
class DeleteTagsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Resources: list<string>,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
