<?php

namespace Sunaoka\Aws\Structures\CognitoSync\BulkPublish;

trait BulkPublishTrait
{
    /**
     * @param BulkPublishRequest $args
     * @return BulkPublishResponse
     */
    public function bulkPublish(BulkPublishRequest $args)
    {
        $result = parent::bulkPublish($args->toArray());
        return new BulkPublishResponse($result->toArray());
    }
}
