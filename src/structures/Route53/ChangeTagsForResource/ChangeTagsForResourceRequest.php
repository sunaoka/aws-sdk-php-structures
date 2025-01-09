<?php

namespace Sunaoka\Aws\Structures\Route53\ChangeTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'healthcheck'|'hostedzone' $ResourceType
 * @property string $ResourceId
 * @property list<Shapes\Tag> $AddTags
 * @property list<string> $RemoveTagKeys
 */
class ChangeTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceType: 'healthcheck'|'hostedzone',
     *     ResourceId: string,
     *     AddTags?: list<Shapes\Tag>,
     *     RemoveTagKeys?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
