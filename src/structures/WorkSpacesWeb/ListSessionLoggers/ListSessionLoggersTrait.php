<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListSessionLoggers;

trait ListSessionLoggersTrait
{
    /**
     * @param ListSessionLoggersRequest $args
     * @return ListSessionLoggersResponse
     */
    public function listSessionLoggers(ListSessionLoggersRequest $args)
    {
        $result = parent::listSessionLoggers($args->toArray());
        return new ListSessionLoggersResponse($result->toArray());
    }
}
