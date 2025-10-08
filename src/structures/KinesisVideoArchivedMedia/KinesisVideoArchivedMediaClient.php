<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia;

class KinesisVideoArchivedMediaClient extends \Aws\KinesisVideoArchivedMedia\KinesisVideoArchivedMediaClient
{
    use GetClip\GetClipTrait;
    use GetDASHStreamingSessionURL\GetDASHStreamingSessionURLTrait;
    use GetHLSStreamingSessionURL\GetHLSStreamingSessionURLTrait;
    use GetImages\GetImagesTrait;
    use GetMediaForFragmentList\GetMediaForFragmentListTrait;
    use ListFragments\ListFragmentsTrait;
}
