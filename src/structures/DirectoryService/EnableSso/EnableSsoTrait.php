<?php

namespace Sunaoka\Aws\Structures\DirectoryService\EnableSso;

trait EnableSsoTrait
{
    /**
     * @param EnableSsoRequest $args
     * @return EnableSsoResponse
     */
    public function enableSso(EnableSsoRequest $args)
    {
        $result = parent::enableSso($args->toArray());
        return new EnableSsoResponse($result->toArray());
    }
}
