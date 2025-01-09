<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\ListFragments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property string $StreamARN
 * @property int $MaxResults
 * @property string $NextToken
 * @property Shapes\FragmentSelector $FragmentSelector
 */
class ListFragmentsRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     StreamARN?: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     FragmentSelector?: Shapes\FragmentSelector
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
