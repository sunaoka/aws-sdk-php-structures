<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property list<Shapes\Tag> $TagsToAdd
 * @property list<string> $TagsToRemove
 */
class UpdateTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     TagsToAdd?: list<Shapes\Tag>,
     *     TagsToRemove?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
