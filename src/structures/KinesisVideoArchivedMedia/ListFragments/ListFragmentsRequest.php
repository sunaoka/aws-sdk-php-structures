<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\ListFragments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property string|null $StreamARN
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\FragmentSelector|null $FragmentSelector
 */
class ListFragmentsRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     StreamARN?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     FragmentSelector?: Shapes\FragmentSelector|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
