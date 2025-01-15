<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\GetMediaForFragmentList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property string|null $StreamARN
 * @property list<string> $Fragments
 */
class GetMediaForFragmentListRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     StreamARN?: string|null,
     *     Fragments: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
