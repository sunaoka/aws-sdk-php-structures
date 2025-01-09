<?php

namespace Sunaoka\Aws\Structures\Iot\ListThings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 * @property string $attributeName
 * @property string $attributeValue
 * @property string $thingTypeName
 * @property bool $usePrefixAttributeValue
 */
class ListThingsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 250>,
     *     attributeName?: string,
     *     attributeValue?: string,
     *     thingTypeName?: string,
     *     usePrefixAttributeValue?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
