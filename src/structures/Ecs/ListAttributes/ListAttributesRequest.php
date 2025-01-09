<?php

namespace Sunaoka\Aws\Structures\Ecs\ListAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property 'container-instance' $targetType
 * @property string $attributeName
 * @property string $attributeValue
 * @property string $nextToken
 * @property int $maxResults
 */
class ListAttributesRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string,
     *     targetType: 'container-instance',
     *     attributeName?: string,
     *     attributeValue?: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
