<?php

namespace Sunaoka\Aws\Structures\SSMContacts\AcceptPage;

trait AcceptPageTrait
{
    /**
     * @param AcceptPageRequest $args
     * @return AcceptPageResponse
     */
    public function acceptPage(AcceptPageRequest $args)
    {
        $result = parent::acceptPage($args->toArray());
        return new AcceptPageResponse($result->toArray());
    }
}
