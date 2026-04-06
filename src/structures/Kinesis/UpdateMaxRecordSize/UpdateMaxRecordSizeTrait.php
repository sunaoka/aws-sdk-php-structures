<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateMaxRecordSize;

trait UpdateMaxRecordSizeTrait
{
    /**
     * @param UpdateMaxRecordSizeRequest $args
     * @return void
     */
    public function updateMaxRecordSize(UpdateMaxRecordSizeRequest $args)
    {
        parent::updateMaxRecordSize($args->toArray());
    }
}
