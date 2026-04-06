<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateSessionLogger;

trait UpdateSessionLoggerTrait
{
    /**
     * @param UpdateSessionLoggerRequest $args
     * @return UpdateSessionLoggerResponse
     */
    public function updateSessionLogger(UpdateSessionLoggerRequest $args)
    {
        $result = parent::updateSessionLogger($args->toArray());
        return new UpdateSessionLoggerResponse($result->toArray());
    }
}
