<?php

namespace Sunaoka\Aws\Structures\Route53\ChangeTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'healthcheck'|'hostedzone'|'healthchecksource' $ResourceType
 * @property string $ResourceId
 * @property list<Shapes\Tag>|null $AddTags
 * @property list<string>|null $RemoveTagKeys
 */
class ChangeTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceType: 'healthcheck'|'hostedzone'|'healthchecksource',
     *     ResourceId: string,
     *     AddTags?: list<Shapes\Tag>|null,
     *     RemoveTagKeys?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
