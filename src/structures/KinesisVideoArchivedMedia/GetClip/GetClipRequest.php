<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\GetClip;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property string|null $StreamARN
 * @property Shapes\ClipFragmentSelector $ClipFragmentSelector
 */
class GetClipRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     StreamARN?: string|null,
     *     ClipFragmentSelector: Shapes\ClipFragmentSelector
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
