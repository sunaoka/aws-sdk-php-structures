<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceName
 * @property string $ResourceType
 * @property int $MaxRecords
 * @property string $Marker
 * @property list<string> $TagKeys
 * @property list<string> $TagValues
 */
class DescribeTagsRequest extends Request
{
    /**
     * @param array{
     *     ResourceName?: string,
     *     ResourceType?: string,
     *     MaxRecords?: int,
     *     Marker?: string,
     *     TagKeys?: list<string>,
     *     TagValues?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
