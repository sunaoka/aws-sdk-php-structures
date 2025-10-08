<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\UpdateSession;

trait UpdateSessionTrait
{
    /**
     * @param UpdateSessionRequest $args
     * @return UpdateSessionResponse
     */
    public function updateSession(UpdateSessionRequest $args)
    {
        $result = parent::updateSession($args->toArray());
        return new UpdateSessionResponse($result->toArray());
    }
}
