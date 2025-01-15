<?php

namespace Sunaoka\Aws\Structures\Iot\ListThings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 * @property string|null $attributeName
 * @property string|null $attributeValue
 * @property string|null $thingTypeName
 * @property bool|null $usePrefixAttributeValue
 */
class ListThingsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null,
     *     attributeName?: string|null,
     *     attributeValue?: string|null,
     *     thingTypeName?: string|null,
     *     usePrefixAttributeValue?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
