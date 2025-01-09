<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\GetClip;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property string $StreamARN
 * @property Shapes\ClipFragmentSelector $ClipFragmentSelector
 */
class GetClipRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     StreamARN?: string,
     *     ClipFragmentSelector: Shapes\ClipFragmentSelector
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
