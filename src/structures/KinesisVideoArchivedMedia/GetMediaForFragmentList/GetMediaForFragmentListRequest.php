<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\GetMediaForFragmentList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property string $StreamARN
 * @property list<string> $Fragments
 */
class GetMediaForFragmentListRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     StreamARN?: string,
     *     Fragments: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
