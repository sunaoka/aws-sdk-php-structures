<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\PutMetadataFlag;

trait PutMetadataFlagTrait
{
    /**
     * @param PutMetadataFlagRequest $args
     * @return void
     */
    public function putMetadataFlag(PutMetadataFlagRequest $args)
    {
        parent::putMetadataFlag($args->toArray());
    }
}
