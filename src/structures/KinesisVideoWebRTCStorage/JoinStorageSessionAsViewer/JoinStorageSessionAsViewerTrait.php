<?php

namespace Sunaoka\Aws\Structures\KinesisVideoWebRTCStorage\JoinStorageSessionAsViewer;

trait JoinStorageSessionAsViewerTrait
{
    /**
     * @param JoinStorageSessionAsViewerRequest $args
     * @return void
     */
    public function joinStorageSessionAsViewer(JoinStorageSessionAsViewerRequest $args)
    {
        parent::joinStorageSessionAsViewer($args->toArray());
    }
}
