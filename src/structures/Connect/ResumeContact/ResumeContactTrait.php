<?php

namespace Sunaoka\Aws\Structures\Connect\ResumeContact;

trait ResumeContactTrait
{
    /**
     * @param ResumeContactRequest $args
     * @return ResumeContactResponse
     */
    public function resumeContact(ResumeContactRequest $args)
    {
        $result = parent::resumeContact($args->toArray());
        return new ResumeContactResponse($result->toArray());
    }
}
