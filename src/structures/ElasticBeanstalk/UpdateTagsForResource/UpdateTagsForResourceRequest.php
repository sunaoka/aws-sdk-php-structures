<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property list<Shapes\Tag>|null $TagsToAdd
 * @property list<string>|null $TagsToRemove
 */
class UpdateTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     TagsToAdd?: list<Shapes\Tag>|null,
     *     TagsToRemove?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
