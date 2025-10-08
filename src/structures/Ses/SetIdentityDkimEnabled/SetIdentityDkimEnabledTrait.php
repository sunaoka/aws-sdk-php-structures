<?php

namespace Sunaoka\Aws\Structures\Ses\SetIdentityDkimEnabled;

trait SetIdentityDkimEnabledTrait
{
    /**
     * @param SetIdentityDkimEnabledRequest $args
     * @return SetIdentityDkimEnabledResponse
     */
    public function setIdentityDkimEnabled(SetIdentityDkimEnabledRequest $args)
    {
        $result = parent::setIdentityDkimEnabled($args->toArray());
        return new SetIdentityDkimEnabledResponse($result->toArray());
    }
}
