<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ResourceName
 * @property string|null $ResourceType
 * @property int|null $MaxRecords
 * @property string|null $Marker
 * @property list<string>|null $TagKeys
 * @property list<string>|null $TagValues
 */
class DescribeTagsRequest extends Request
{
    /**
     * @param array{
     *     ResourceName?: string|null,
     *     ResourceType?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null,
     *     TagKeys?: list<string>|null,
     *     TagValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
