<?php

namespace Sunaoka\Aws\Structures\Ecs\ListAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $cluster
 * @property 'container-instance' $targetType
 * @property string|null $attributeName
 * @property string|null $attributeValue
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListAttributesRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string|null,
     *     targetType: 'container-instance',
     *     attributeName?: string|null,
     *     attributeValue?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
