<?php

namespace Sunaoka\Aws\Structures\QBusiness\ChatSync;

trait ChatSyncTrait
{
    /**
     * @param ChatSyncRequest $args
     * @return ChatSyncResponse
     */
    public function chatSync(ChatSyncRequest $args)
    {
        $result = parent::chatSync($args->toArray());
        return new ChatSyncResponse($result->toArray());
    }
}
