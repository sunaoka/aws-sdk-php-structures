<?php

namespace Sunaoka\Aws\Structures\KinesisVideoWebRTCStorage;

class KinesisVideoWebRTCStorageClient extends \Aws\KinesisVideoWebRTCStorage\KinesisVideoWebRTCStorageClient
{
    use JoinStorageSession\JoinStorageSessionTrait;
    use JoinStorageSessionAsViewer\JoinStorageSessionAsViewerTrait;
}
